<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>

    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" id="firstName" /></td>
            <td>
                <div id="firstNameHelpDiv">
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" id="lastName" /></td>
            <td>
                <div id="lastNameHelpDiv">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" id="email" /></td>
            <td>
                <div id="emailHelpDiv">
            </td>
        </tr>
        <tr>
            <td>Income</td>
            <td><input type="text" id="income" /></td>
            <td>
                <div id="incomeHelpDiv">
            </td>
        </tr>
    </table>

    <!-- A form element without class or ID  -->
    <form action="">



        <!-- Checkbox with ID -->
        <input id="checkbox1" class="checkbox" type="checkbox" name="cb">
        <label for="checkbox">I accept</label> <br>
        <input id="checkbox2" class="checkbox" type="checkbox" name="cb">
        <label for="checkbox">I accept</label> <br>
        <input id="checkbox3" class="checkbox" type="checkbox" name="cb">
        <label for="checkbox">I accept</label> <br>
        <input id="checkbox4" class="checkbox" type="checkbox" name="cb">
        <label for="checkbox">I accept</label> <br>
        <br>


        <!-- Selection with ID -->
        <select name="" id="selection">
            <option value="apples">Apples</option>
            <option value="bananas">Bananas</option>
            <option value="pears">Pears</option>
        </select>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <form id="form" action="">

        <textarea name="message" id="message1" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <form id="form2" action="" style="margin-top:10px;">
        <input id="name" type="text" value="">
        <span id="name-feedback"></span><br>

        <input id="password" type="password" value="">
        <span id="password-feedback"></span><br>

        <textarea id="message" name="message" cols="30" rows="10"></textarea>
        <span id="message-feedback"></span><br>

        <input id="checkboxsubmit" type="checkbox" name="cb">
        <label for="checkbox">I accept</label>
        <span id="checkbox-feedback"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function () {
            $(".checkbox").change(function () {
                var checkBox = $(this).is(":checked");
                if (checkBox) {
                    $(this).addClass("check");
                    $(this).css("box-shadow", "0 0 4px red");
                }

            });

            $("#selection").change(function () {
                var selected = $(this).find(":selected").val();
                alert(selected);

            });

            $("#form").submit(function (e) {
                var textArea = $("#message1");
                if (textArea.text().trim() == "") {
                    textArea.css('box-shadow', '0 0 4px red');
                    e.preventDefault();
                }

            });
            $("#form2").submit(function (e) {
                var name = $("#name").val();
                var password = $("#password").val();
                var message = $("#message").val();
                var checkboxsubmit = $("#checkboxsubmit").is(":checked");

                isNamevalid(name,e);
                isPwdRight(password,e)
                isMsgEmpty(message,e)
                isChecked(checkboxsubmit,e);
            });

            function isNamevalid(nameSubmit,e){
                var result = checkNameLength(nameSubmit);
                alert(result);
                if(!result){
                    $("#name-feedback").text("name should be > 2");
                    e.preventDefault();
                }
                else{
                    $("#name-feedback").text("");
                }
            }

            function isPwdRight(pwdSubmit,e){
                var result = pwdLength(pwdSubmit);
                if(!result){
                    $("#password-feedback").text("password should be > 4");
                    e.preventDefault();
                }
                else{
                    $("#password-feedback").text("");
                }
            }

            function isMsgEmpty(msgEnter,e){
                var result = msgValue(msgEnter);
                if(!result){
                    $("#message-feedback").text("message should be > 4");
                    e.preventDefault();
                }
                else{
                    $("#message-feedback").text("");
                }
            }

            function isMsgEmpty(msgEnter,e){
                var result = msgValue(msgEnter);
                if(!result){
                    $("#message-feedback").text("message should be > 4");
                    e.preventDefault();
                }
                else{
                    $("#message-feedback").text("");
                }
            }


            function isChecked(checkBoxCheck,e){

                if(!checkBoxCheck){
                    $("#checkbox-feedback").text("checkbox should be checked");
                    e.preventDefault();
                }
                else{
                    $("#checkbox-feedback").text("");
                }
            }

            function msgValue(msgValue){
                return msgValue.length>6;
            }

            function pwdLength(pwdEntered){
                return pwdEntered.length>4;
            }
            function checkNameLength(nameEntered){
                return nameEntered.length > 2;
            }
        });
    </script>



    <script>
        $(document).ready(function () {
            var textBoxes = $('input[type="text"]');
            textBoxes.focus(function () {
                var HelpDiv = ($(this).attr('id') + 'HelpDiv');
                $('#' + HelpDiv).load('help.html #' + HelpDiv);
            });
            textBoxes.blur(function () {
                var HelpDiv = ($(this).attr('id') + 'HelpDiv');
                $('#' + HelpDiv).html('');
            });
        });
    </script>

</body>

</html>