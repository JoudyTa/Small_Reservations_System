@extends('layouts.app')

@section('content')
    <div class="col">

        <div class="row">
            <!-- SEND-->
            <form method="post" action="{{ route('send') }}">
                @csrf
                <div class="col-12 col-xxl-6 mb-4">
                    <div class="card border-0 shadow">
                        <!-- NAME FORM -->

                        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                            <h2 class="fs-5 fw-bold mb-0">Send Email</h2>
                        </div>
                        <!-- email -->



                        <div class="card-body">
                            <ul class="list-group list-group-flush list my--3">
                                <div class="table-settings mb-4">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-9 col-lg-8 d-md-flex">
                                            <div class="input-group me-3 me-lg-5 fmxw-100">
                                                <h6 style="margin-right: 10px;margin-top: 5px;">Receiver Email</h6>
                                                <input id="email" type="text" class="form-control" name="email"
                                                    placeholder="receiver email" style="margin-right: 10px;">

                                                <button type="submit" class="submit btn btn-primary">send</button>

                                                <!-- <button id="myButton" type="submit" class="submit btn btn-primary">Submit</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <!--  -->

                </div>
            </form>
            <!-- Reservations -->
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <!-- Head -->
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- NAME -->
                                <h2 class="fs-5 fw-bold mb-0">Reservations</h2>
                            </div>
                            <!-- See All -->
                            <!-- <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-primary">See all</a>
                                    </div> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">id</th>
                                    <th class="border-bottom" scope="col">Name</th>
                                    <th class="border-bottom" scope="col">Email</th>
                                    <th class="border-bottom" scope="col">Country of Residency</th>
                                    <th class="border-bottom" scope="col">Companion</th>
                                </tr>
                            </thead>

                            <tbody id="my-tbody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {

                $('.submit').click(function() {
                    // Submit form using Ajax
                    $.ajax({
                        url: "{{ route('send') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        //$('form').serialize(),

                        success: function(response) {

                            alert(response.message);
                        },
                        error: function(xhr) {
                            // Display error message
                            alert(xhr.responseText);
                        }
                    });
                });
            });
        </script>
        <!-- <script>
            const button = document.getElementById('myButton');

            button.addEventListener('click', (event) => {
                const email = document.getElementById('email').value;
                console.log(email)
                event.preventDefault(); // Prevent the form from submitting
                fetch('/dashboard/send_email', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            email: email
                        })
                    })
                    .then(response => {
                        console.log(response);
                        if (response.ok) {
                            console.log('OK');
                            return response.json();
                        } else {
                            throw new Error('Network response was not ok.');
                        }
                    })
                    // .then(data => {
                    //     console.log(data);
                    //     // Do something with the data returned by the API
                    // })
                    .catch(error => {
                        console.log(error);
                        // Handle any errors that occurred during the API call
                    });
            });
        </script> -->

        <script>
            var data = <?php echo json_encode($data); ?>;
            console.log(data); // You can now access the allRes variable in JavaScript



            // let data = [{
            // id: 1,
            // name: 'zain',
            // email: 'zain@gmail.com',
            // country_of_residency: 'UN',
            // Companion: 'Yes',
            // },
            // {
            // id: 2,
            // name: 'jojo',
            // email: 'jojo@gmail.com',
            // country_of_residency: 'UK',
            // Companion: 'NO',
            // },

            // ];
            let tbody = document.getElementById('my-tbody');

            for (let i = 0; i < data.length; i++) {
                let row = document.createElement('tr');
                let cell1 = document.createElement('th');
                cell1.setAttribute('class', 'text-gray-900');
                cell1.setAttribute('scope', 'row');
                let cell2 = document.createElement('td');
                cell2.setAttribute('class', 'fw-bolder text-gray-500');
                let cell3 = document.createElement('td');
                cell3.setAttribute('class', 'fw-bolder text-gray-500');
                let cell4 = document.createElement('td');
                cell4.setAttribute('class', 'fw-bolder text-gray-500');
                let cell5 = document.createElement('td');
                cell5.setAttribute('class', 'fw-bolder text-gray-500');
                cell1.textContent = data[i].id;
                cell2.textContent = data[i].name;
                cell3.textContent = data[i].email;
                cell4.textContent = data[i].country_of_residency;
                cell5.textContent = data[i].Companion;
                row.appendChild(cell1);
                row.appendChild(cell2);
                row.appendChild(cell3);
                row.appendChild(cell4);
                row.appendChild(cell5);
                tbody.appendChild(row);
            }
        </script>
        <script>
            $(document).ready(function() {





                $('.submit').click(function() {
                    // Submit form using Ajax
                    $.ajax({
                        url: "{{ route('submit_form') }}",
                        type: 'POST',
                        data: $('form').serialize(),

                        success: function(response) {

                            alert(response.message);
                        },
                        error: function(xhr) {
                            // Display error message
                            alert(xhr.responseText);
                        }
                    });
                });
            });
        </script>
    @endsection
