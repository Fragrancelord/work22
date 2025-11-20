<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Styled Registration Form</title>
  <style>
    body {
      font-family: Poppins, sans-serif;
      background: #f4f6fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      width: 420px;
      background: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .form-container:hover {
      transform: translateY(-4px);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 26px;
    }

    label {
      font-weight: 600;
      color: #333;
      display: block;
      margin-bottom: 6px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 15px;
    }

    input:focus, select:focus {
      border-color: #4a90e2;
      outline: none;
      box-shadow: 0 0 5px rgba(74,144,226,0.4);
    }

    .gender-box {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    .gender-box label {
      font-weight: normal;
      margin: 0;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #4a90e2;
      border: none;
      color: #fff;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      font-weight: 600;
    }

    button:hover {
      background: #357ac8;
    }
  </style>
</head>
<body>
<div class="form-container">
  <h2>Registration Form</h2>

  <form action="submit.php" method="post">

    <label>Firstname</label>
    <input type="text" name="firstname" placeholder="Enter First Name" required />

    <label>Lastname</label>
    <input type="text" name="lastname" placeholder="Enter Last Name" required />

    <label>Gender</label>
    <div class="gender-box">
      <label><input type="radio" name="gender" value="Male" required /> Male</label>
      <label><input type="radio" name="gender" value="Female" required /> Female</label>
    </div>

    <label>Date of Birth</label>
    <input type="date" name="dob" required />

    <label>State of Origin</label>
    <select name="state" required>
      <option value="">-- Select State --</option>
      <option>Abia</option><option>Adamawa</option><option>Akwa Ibom</option><option>Anambra</option>
      <option>Bauchi</option><option>Bayelsa</option><option>Benue</option><option>Borno</option>
      <option>Cross River</option><option>Delta</option><option>Ebonyi</option><option>Edo</option>
      <option>Ekiti</option><option>Enugu</option><option>Gombe</option><option>Imo</option>
      <option>Jigawa</option><option>Kaduna</option><option>Kano</option><option>Katsina</option>
      <option>Kebbi</option><option>Kogi</option><option>Kwara</option><option>Lagos</option>
      <option>Nasarawa</option><option>Niger</option><option>Ogun</option><option>Ondo</option>
      <option>Osun</option><option>Oyo</option><option>Plateau</option><option>Rivers</option>
      <option>Sokoto</option><option>Taraba</option><option>Yobe</option><option>Zamfara</option>
      <option>FCT Abuja</option>
    </select>

    <label>Qualification</label>
    <select name="qualification" required>
      <option value="">-- Select Qualification --</option>
      <option>SSCE</option>
      <option>OND</option>
      <option>NCE</option>
      <option>HND</option>
      <option>B.Sc</option>
      <option>B.A</option>
      <option>M.Sc</option>
      <option>PhD</option>
    </select>

    <label>Class of Degree</label>
    <select name="degree_class" required>
      <option value="">-- Select Degree Class --</option>
      <option>First Class</option>
      <option>Second Class Upper</option>
      <option>Second Class Lower</option>
      <option>Third Class</option>
      <option>Pass</option>
    </select>

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>