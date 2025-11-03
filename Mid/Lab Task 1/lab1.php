<!DOCTYPE html>
 
<head>
    <title>
        WT_0
    </title>
</head>
<style>
    body {
        background-color: white
    }
</style>
 
<body>
    <center>
        <table>
            <h1 style="color:red;font-size:30px">Student Registration Information</h1>
            <hr color="Red">

            <tr>
                <td>Enter Your Frist Name:</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Enter Your Last Name:</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Enter Your Student ID:</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Program/Major:</td>
            </tr>

            <tr>
                <td><select name="sub" id="sub">
                        <option value="CSE">BSc in CSE</option>
                        <option value="EEE">BSc in EEE</option>
                        <option value="BBa">BSc in BBA</option>
                        <option value="English">BSc in ENGLISH</option>
                    </select></td>
            </tr>

            <tr>
                <td>Department:</td>
            </tr>
            <tr>
                <td><select name="sub" id="sub">
                        <option value="FST">FST</option>
                        <option value="FBA">FBA</option>
                        <option value="FA">FA</option>
                        <option value="FP">FP</option>
                    </select></td>
            </tr>

            <tr>
                <td>Phone</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>University Name</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Create Password (8 Character)</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Confrim Password (8 Character)</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Select Semester</td>
            </tr>

            <td><input type="radio" name="PC">Summer 2024
                <input type="radio" name="PC">Fall 2024
                <input type="radio" name="PC">Spring 2024
                <input type="radio" name="PC">Other/Special Term
            </td>
            </tr>

            <tr>
                <td>Requested Credit Load</td>
            </tr>
            <tr>
                <td><input type="number" placeholder="e.g, 9 or 12"></td>
            </tr>

            <tr>
                <td><input type="checkbox"> I required academic advising before final registration</td>
            </tr>
        </table>

        <h1>Course Selection</h1>
        <hr color="red">

        <table>
            <tr>
                <td>
                    <input type="checkbox">MATH 1201(Calculus I)
                    <input type="checkbox">CS 2105(DATA Structures)
                    <input type="checkbox">ECON 1001(Microeconomics)
                    <input type="checkbox">PHY 1102(Physics Lab)
                </td>
            </tr>

            <tr>
                <td>Comments</td>
            </tr>
            <tr>
                <td><input type="text" style="width: 300px; height: 30px;"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>

    </center>
</body>
</html>
