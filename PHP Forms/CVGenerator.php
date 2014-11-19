<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>

    </style>
    <script>
        var nextID = 0;
        function addCompLang(){
            nextID++;
            var newDiv = document.createElement("div");
            newDiv.setAttribute('id',"compLanguage"+nextID);
            newDiv.innerHTML =
                " <input type=\"text\" name=\"comLang["+nextID+"]\"\>"+
                    "<select name=\"level["+nextID+"]\"\>"+
                    " <option>Beginner</option>"+
                    " <option>Advance</option>"+
                    " <option>Programmer</option>"+
                    "<option>Ninja</option>"+
                    "</select>";
            document.getElementById("parent").appendChild(newDiv);
        }
        function removeCompLang(id){
            var compLang = document.getElementById('compLanguage'+id);
            document.getElementById('parent').removeChild(compLang);
            nextID--;
        }
        var newID = 0;
        function addLang(){
            newID++;
            var newDiv = document.createElement("div");
            newDiv.setAttribute('id',"language"+newID);
            newDiv.innerHTML =
           "<input type=\"text\" name=\"language[\"+nextID+\"]\"\>"+
           "<select name=\"comprehension["+nextID+"]\"\>"+
               "<option hidden=\"hidden\">-Comprehension-</option>"+
               "<option>beginner</option>"+
                "<option>intermediate</option>"+
                "<option>advanced</option>"+
            "</select>"+
            "<select name=\"reading["+newID+"]\"\>"+
                "<option hidden=\"hidden\">-Reading-</option>"+
                "<option>beginner</option>"+
                " <option>intermediate</option>"+
                "<option>advanced</option>"+
            "</select>"+
            "<select name=\"writing["+newID+"]\"\>"+
                "<option hidden=\"hidden\">-Writing-</option>"+
                "<option>beginner</option>"+
                "<option>intermediate</option>"+
                "<option>advanced</option>"+
            "</select>";

            document.getElementById("construct").appendChild(newDiv);
        }
        function removeLang(id){
            var compLang = document.getElementById('language'+id);
            document.getElementById('construct').removeChild(compLang);
            nextID--;
        }
    </script>
</head>
<body>
<form action="CVGenerator.html" method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <div><input type="text" name="fName" placeholder="First Name"></div>
        <div><input type="text" name="lName" placeholder="Last Name"></div>
        <div><input type="email" name="email" placeholder="Email"></div>
        <div><input type="text" name="phone" placeholder="Phone Number"></div>
        <div>
            Female <input type="radio" name="sex" value="Female">
            Male <input type="radio" name="sex" value="Male">
        </div>
        <div>Birth Date</div>
        <div><input type="date" name="bDate"></div>
        <div>Nationality</div>
        <div>
            <select name="nationality">
                <option>Bulgarian</option>
                <option>England</option>
                <option>Usa</option>
                <option>Germany</option>
                <option>Russian</option>
            </select>
        </div>
    </fieldset>
    <fieldset>
        <legend>Last work Position</legend>
        <div>Company name <input type="text" name="companyName"></div>
        <div>From<input type="date" name="startDate" ></div>
        <div>To<input type="date" name="endDate"></div>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <div>Programing Languages</div>
        <div id="parent">

        </div>
        <div>
            <input type="button" id="removeComLang" value="Remove Language" onclick="javascript:removeCompLang(nextID)">
            <input type="button" id="addComLang" value="Add Language" onclick="javascript:addCompLang()">
        </div>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <div>Languages</div>
        <div>
            <input type="text" name="language">
            <select name="comprehension">
                <option hidden="hidden">-Comprehension-</option>
                <option>beginner</option>
                <option>intermediate</option>
                <option>advanced</option>
            </select>
            <select name="reading">
                <option hidden="hidden">-Reading-</option>
                <option>beginner</option>
                <option>intermediate</option>
                <option>advanced</option>
            </select>
            <select name="writing">
                <option hidden="hidden">-Writing-</option>
                <option>beginner</option>
                <option>intermediate</option>
                <option>advanced</option>
            </select>
        </div>
        <div id="construct">

        </div>
        <div>
            <input type="button" id="removeLang" value="Remove Language" onclick="javascript:removeLang(nextID)">
            <input type="button" id="addLang" value="Add Language" onclick="javascript:addLang()">
        </div>
        <div>Driver's License</div>
        <div>
            <label>B</label><input type="radio" name="driver">
            <label>A</label><input type="radio" name="driver">
            <label>C</label><input type="radio" name="driver">
        </div>
    </fieldset>
    <input type="submit" value="Generate CV">
</form>
</body>
</html>