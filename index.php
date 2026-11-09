<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration | Lab 02</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; font-family: Arial, sans-serif; color: #172033;
            background: #f3f6fb; padding: 32px 16px;
        }
        .container { max-width: 850px; margin: auto; }
        .header { text-align: center; margin-bottom: 24px; }
        .header .tag { color: #2563eb; font-weight: bold; font-size: 13px; letter-spacing: 1px; }
        h1 { margin: 10px 0 8px; font-size: 30px; }
        .header p { color: #64748b; margin: 0; }
        form {
            background: white; padding: 28px; border-radius: 16px;
            box-shadow: 0 8px 30px rgba(20, 40, 80, .08);
        }
        h2 { font-size: 18px; margin: 0 0 18px; padding-bottom: 12px; border-bottom: 1px solid #e7edf5; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .field { margin-bottom: 16px; }
        label { display: block; font-weight: 600; font-size: 13px; margin-bottom: 7px; }
        input, select {
            width: 100%; padding: 12px 13px; border: 1px solid #d7dfeb;
            border-radius: 8px; font-size: 14px; background: #fff;
        }
        input:focus, select:focus { outline: 2px solid #bfdbfe; border-color: #3b82f6; }
        .subjects { margin-top: 24px; }
        .subject-row {
            display: grid; grid-template-columns: 1fr 180px; gap: 14px;
            padding: 14px; background: #f8fafc; border-radius: 10px; margin-bottom: 12px;
        }
        .subject-row .field { margin: 0; }
        button {
            width: 100%; border: 0; border-radius: 9px; padding: 14px;
            color: white; background: #2563eb; font-size: 15px; font-weight: bold;
            cursor: pointer; margin-top: 12px;
        }
        button:hover { background: #1d4ed8; }
        .note { color: #64748b; font-size: 12px; margin-top: 14px; text-align: center; }
        @media (max-width: 600px) {
            .grid, .subject-row { grid-template-columns: 1fr; }
            form { padding: 20px; } h1 { font-size: 25px; }
        }
    </style>
</head>
<body>
<div class="container">
    <header class="header">
        <div class="tag">WEB ENGINEERING • LAB TASK 02</div>
        <h1>Student Registration</h1>
        <p>Enter student details and academic marks to generate a profile.</p>
    </header>

    <form action="process.php" method="POST">
        <h2>Personal Information</h2>
        <div class="grid">
            <div class="field">
                <label for="name">Student Name *</label>
                <input id="name" type="text" name="name" placeholder="e.g. Ali Ahmed" required>
            </div>
            <div class="field">
                <label for="reg_no">Registration Number *</label>
                <input id="reg_no" type="text" name="reg_no" placeholder="e.g. FA23-BSE-001" required>
            </div>
            <div class="field">
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" placeholder="student@example.com" required>
            </div>
            <div class="field">
                <label for="contact">Contact Number *</label>
                <input id="contact" type="tel" name="contact" placeholder="03XXXXXXXXX" required>
            </div>
            <div class="field">
                <label for="department">Department *</label>
                <select id="department" name="department" required>
                    <option value="">Select department</option>
                    <option>Software Engineering</option>
                    <option>Computer Science</option>
                    <option>Information Technology</option>
                    <option>Data Science</option>
                </select>
            </div>
            <div class="field">
                <label for="semester">Semester *</label>
                <select id="semester" name="semester" required>
                    <option value="">Select semester</option>
                    <option>1st Semester</option><option>2nd Semester</option>
                    <option>3rd Semester</option><option>4th Semester</option>
                    <option>5th Semester</option><option>6th Semester</option>
                    <option>7th Semester</option><option>8th Semester</option>
                </select>
            </div>
        </div>

        <div class="subjects">
            <h2>Academic Information</h2>
            <p style="color:#64748b;font-size:13px;margin-top:-8px;">Enter three subjects and marks (0–100).</p>
            <div class="subject-row">
                <div class="field">
                    <label for="subject1">Subject 1 Name *</label>
                    <input id="subject1" type="text" name="subjects[]" placeholder="Web Engineering" required>
                </div>
                <div class="field">
                    <label for="mark1">Subject 1 Marks *</label>
                    <input id="mark1" type="number" name="marks[]" min="0" max="100" placeholder="80" required>
                </div>
            </div>
            <div class="subject-row">
                <div class="field">
                    <label for="subject2">Subject 2 Name *</label>
                    <input id="subject2" type="text" name="subjects[]" placeholder="Database Systems" required>
                </div>
                <div class="field">
                    <label for="mark2">Subject 2 Marks *</label>
                    <input id="mark2" type="number" name="marks[]" min="0" max="100" placeholder="75" required>
                </div>
            </div>
            <div class="subject-row">
                <div class="field">
                    <label for="subject3">Subject 3 Name *</label>
                    <input id="subject3" type="text" name="subjects[]" placeholder="Programming Fundamentals" required>
                </div>
                <div class="field">
                    <label for="mark3">Subject 3 Marks *</label>
                    <input id="mark3" type="number" name="marks[]" min="0" max="100" placeholder="90" required>
                </div>
            </div>
        </div>
        <button type="submit">Submit & Generate Student Profile</button>
        <p class="note">* All fields are required. Data is processed using PHP POST; no database is used.</p>
    </form>
</div>
</body>
</html>
