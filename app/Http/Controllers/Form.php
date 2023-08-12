<?php

namespace App\Http\Controllers;

use App\Models\Re;
use App\Traits\TraitPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use PHPMailer\PHPMailer\PHPMailer;

class Form extends Controller
{

    public function check(Request $request)
    {

        if ($request->options) {

            $collect_data = collect($request->all());
            $data = $collect_data->chunk(22);

            $data1 = $data->get(0)->toArray();

            $data2 = $data->get(1)->toArray();

            foreach ($data2 as $key => $value) {
                $new_key = str_replace('2', '', $key);
                $data2[$new_key] = $value;
                unset($data2[$key]);
            }

            $this->submit($data1);
            $this->submit($data2);
        } else {

            $re = $request->all();
            $this->submit($re);
        }

        return redirect('message');
    }
    /**
     *
     * @return Response $response
     */
    use TraitPhoto;
    public function submit($arr)
    {

        $photo_pas = $arr['passport_picture'];
        $file_name_pas = $this->saveImage($photo_pas, 'images/passport'); //passport

        $photo_per = $arr['personal_picture'];
        $file_name_per = $this->saveImage($photo_per, 'images/personal'); //passport

        $id = auth()->id();

        Re::create([
            'user_id' => $id,
            'first_name' => $arr['first_name'], 'last_name' => $arr['last_name'],
            'phone_number' => $arr['number'], 'date_of_birth' => $arr['dob'],
            'gender_id' => $arr['gender'], 'country_of_residency_id' => $arr['country_residency'],
            'passport_no' => $arr['passport_no'], 'issue_date' => $arr['issue_date'],
            'expiry_date' => $arr['expiry_date'], 'place_of_issue_id' => $arr['place_issue'],
            'arrival_date' => $arr['arrival_date'], 'profession' => $arr['profession'],
            'organization' => $arr['organization'], 'visa_duration' => $arr['visa_duration'],
            'visa_status_id' => $arr['visa_status_id'], 'passport_picture' => $file_name_pas,
            'personal_picture' => $file_name_per, 'with_companion' => $arr['options'],
            'check_in_date' => $arr['Check_in_date'], 'check_out_date' => $arr['Check_out_date'],
            'rom_type_id' => $arr['Rom_type'],
        ]);

        $email = DB::select("SELECT email FROM users WHERE id=$id");
        $email_arr['email'] = $email[0]->email;
        $email_arr['type'] = 'complete';
        $this->send_mail($email_arr);

    }

    public function send_mail($arr)
    {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'mail.rstest10.rs4it.sa';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465; //port number
        $mail->Username = 'CEO@rstest10.rs4it.sa';
        $mail->Password = 'G$s4Lc0^VzXw';
        $mail->setFrom('CEO@rstest10.rs4it.sa', 'Test');
        $mail->addReplyTo('CEO@rstest10.rs4it.sa', 'Test');
        $mail->addAddress($arr['email']);

        if ($arr['type'] == 'create') {
            $mail->Body = view('emails.creat');
            $subject = 'Welcome content ';
        } else {
            if ($arr['type'] == 'complete') {
                $mail->Body = view('emails.complete');
                $subject = 'Complete information content';
            }
        }

        $mail->Subject = mb_encode_mimeheader($subject, 'UTF-8', 'B');
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->send();
    }

    public function send(Request $request)
    {
        $arr = $request->all();
        $arr['type'] = 'create';
        $this->send_mail($arr);
        return redirect('dashboard');
    }

    public function dashboard()
    {
        $all_res = DB::select("SELECT
        res.id,res.user_id,
        CONCAT(res.first_name, ' ', res.last_name) AS name,
        country_of_residencies.name AS country_of_residency,
        CASE WHEN res.with_companion = 1 THEN 'Yes' ELSE 'No' END AS Companion,
        users.email FROM res
        JOIN country_of_residencies ON res.country_of_residency_id = country_of_residencies.id
        JOIN users ON res.user_id = users.id;
        ");
        $data = $all_res;
        return view('dashboard', compact('data'));
    }
}