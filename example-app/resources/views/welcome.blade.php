<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/multiple-table.css') }}">
    <title>Javascript 101</title>
</head>

<body>
    <div class="container">
        <div class="label">
            <h1>ตารางสูตร</h1>
            <h1>คูณแม่ <span id="display-value">2</span></h1>
            <input type="text" id="number" value=2>
            <button onClick=generateValue()>Submit</button>
        </div>

        <table>
            <tbody id="show">
                <script>
                    window.onload = function() {
                        generateValue();
                    };
                </script>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {});

        let generateValue = () => {
            let value = parseInt($('#number').val())
            $('#display-value').html(value)

            let my_code_tr = ``
            let multiple_value = 0;

            for (let i = 1; i <= 24; i++) {
                multiple_value = i * value
                my_code_tr += `<tr>`
                my_code_tr += `<td>${value}</td>`
                my_code_tr += `<td>x</td>`
                my_code_tr += `<td>${i}</td>`
                my_code_tr += `<td>=</td>`
                my_code_tr += `<td>${multiple_value}</td>`
                my_code_tr += `<tr>`
            }
            $('#show').html(my_code_tr)
        }
    </script>
</body>

</html>