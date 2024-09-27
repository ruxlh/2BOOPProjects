<!DOCTYPE html>
<html>
<head>
    <title>Week</title>
    <style>
        body {
            background-color: #1a1851;
            color:#fcb315;
            font-family: arial black, arial black;
            text-align: center;
            margin-top: 200px;
        }

        button {
            background-color: #fcb315;
            color: #1a1851;
            font-size: 30px;
            padding: 10px 30px;
            border-radius: 20px;
            border: 100px;
            margin: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #fcb315;
            color: white;
        }

        #display {
            font-size: 35px;
            margin-top: 30px;
            color: white;
        }

        #WEEK {
            font-size: 50px;
        }
    </style>
</head>
<body>
    
    <p id="WEEK"> WEEK
    </p>
    <button onclick="showDay('Monday')">Monday</button>
    <button onclick="showDay('Tuesday')">Tuesday</button>
    <button onclick="showDay('Wednesday')">Wednesday</button>
    <button onclick="showDay('Thursday')">Thursday</button>
    <button onclick="showDay('Friday')">Friday</button>

    <p id="display"></p>

    <script>
        function showDay(day) {
            document.getElementById("display").innerText = day;
        }
    </script>

</body>
</html>