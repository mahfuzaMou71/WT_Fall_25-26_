<!DOCTYPE html>
<html>
<head>
  <title>American International University-Bangladesh – Demo Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #111827;
      color: #e5e7eb;
    }

    h2, h3 {
      text-align: center;
      color: #f9fafb;
    }

    form {
      background-color: #0f172a;
      padding: 20px;
      border-radius: 12px;
      width: 340px;
      margin: 10px auto 0 auto;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }

    label {
      display: block;
      margin-top: 8px;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-top: 6px;
      border-radius: 6px;
      border: 1px solid #475569;
      box-sizing: border-box;
      background-color: #020617;
      color: #e5e7eb;
    }

    input:focus {
      outline: none;
      border-color: #f97316;
      box-shadow: 0 0 0 1px #f97316;
    }

    button {
      width: 100%;
      padding: 9px;
      margin-top: 14px;
      border-radius: 6px;
      border: none;
      background-color: #f97316;
      color: #0b1120;
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background-color: #ea580c;
    }

    #regError {
      margin-top: 10px;
      color: #fecaca;
      text-align: center;
      font-size: 14px;
    }

    #regOutput {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #bbf7d0;
    }

    #courseSection {
      margin-top: 40px;
      text-align: center;
    }

    #courseBox {
      background-color: #0f172a;
      padding: 20px;
      border-radius: 12px;
      width: 340px;
      margin: 10px auto 0 auto;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }

    #courseName {
      width: 100%;
      padding: 8px;
      margin-top: 6px;
      border-radius: 6px;
      border: 1px solid #475569;
      box-sizing: border-box;
      background-color: #020617;
      color: #e5e7eb;
    }

    #courseName:focus {
      outline: none;
      border-color: #38bdf8;
      box-shadow: 0 0 0 1px #38bdf8;
    }

    #courseButton {
      width: 100%;
      padding: 9px;
      margin-top: 14px;
      border-radius: 6px;
      border: none;
      background-color: #38bdf8;
      color: #020617;
      cursor: pointer;
      font-weight: bold;
    }

    #courseButton:hover {
      background-color: #0ea5e9;
    }

    #courseList {
      list-style: none;
      padding-left: 0;
      margin-top: 15px;
      text-align: left;
    }

    #courseList li {
      margin-bottom: 8px;
      padding: 6px 8px;
      background-color: #020617;
      border-radius: 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border: 1px solid #1f2937;
      font-size: 14px;
    }

    #courseList button {
      width: auto;
      padding: 4px 10px;
      margin-left: 10px;
      border-radius: 4px;
      border: 1px solid #b91c1c;
      background-color: #fecaca;
      color: #7f1d1d;
      cursor: pointer;
      font-weight: normal;
    }

    #courseList button:hover {
      background-color: #fca5a5;
    }
  </style>
</head>
<body>

  <h2>American International University-Bangladesh</h2>

  <h3>Student Registration</h3>

  <form onsubmit="return handleRegister()">
    <label>Full Name:</label>
    <input type="text" id="fullName">

    <label>Email:</label>
    <input type="text" id="email">

    <label>Password:</label>
    <input type="password" id="password">

    <label>Confirm Password:</label>
    <input type="password" id="confirmPassword">

    <button type="submit">Register</button>
  </form>

  <div id="regError"></div>
  <div id="regOutput"></div>

  <div id="courseSection">
    <h3>Course Selection</h3>
    <div id="courseBox">
      <label>Course Name:</label>
      <input type="text" id="courseName">
      <button id="courseButton" onclick="addCourse()">Add Course</button>
      <ul id="courseList"></ul>
    </div>
  </div>

  <script>
    function handleRegister() {
      var name = document.getElementById("fullName").value.trim();
      var email = document.getElementById("email").value.trim();
      var pass = document.getElementById("password").value;
      var conf = document.getElementById("confirmPassword").value;

      var errorDiv = document.getElementById("regError");
      var outputDiv = document.getElementById("regOutput");

      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";

      if (name === "" || email === "" || pass === "" || conf === "") {
        alert("All fields are required.");
        errorDiv.innerHTML = "All fields are required.";
        return false;
      }

      if (email.includes("@") === false) {
        alert("Email must contain '@'.");
        errorDiv.innerHTML = "Email must contain '@'.";
        return false;
      }

      if (pass !== conf) {
        alert("Password and Confirm Password must match.");
        errorDiv.innerHTML = "Password and Confirm Password must match.";
        return false;
      }

      outputDiv.innerHTML =
        "<strong>Registration Successful!</strong><br><br>" +
        "Name: " + name + "<br>" +
        "Email: " + email;

      return false;
    }

    function addCourse() {
      var course = document.getElementById("courseName").value.trim();

      if (course === "") {
        alert("Enter a course name.");
        return;
      }

      var li = document.createElement("li");
      li.innerHTML = course + " <button onclick='this.parentNode.remove()'>Delete</button>";

      document.getElementById("courseList").appendChild(li);
      document.getElementById("courseName").value = "";
    }
  </script>

</body>
</html>
