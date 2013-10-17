<html>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <head>
        <link rel="stylesheet" href="styles1.css" />
        <link rel="stylesheet" href="activities.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="activities.js"></script>
    </head>
    <body>
        <div id="Lower">
            <div id="create-activities">
                <div><b>Create</b></div>
                <div class="button">New Task</div>
                <div class="button">New Event</div>
                <div class="button">New Call</div>
            </div>
            <div class="Main">
                <div> <h2>Create Event</h2></div>
                <table class="detail">
                    <tr>
                        <td class="tdl">*Subject</td>
                        <td><input type="text" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">Event Owner</td>
                        <td><input type="text" value="Li Meng" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">Start Date Time</td>
                        <td><input type="datetime" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">End Date Time</td>
                        <td><input type="datetime" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">Venue</td>
                        <td><input type="text" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">Company</td>
                        <td><input type="text" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">Contact</td>
                        <td><input type="text" class="text1"></td>
                    </tr>
                    <tr>
                        <td class="tdl">Description</td>
                        <td><textarea></textarea></td>
                    </tr>
                </table>
                <div>
                    <div class="button inline">Save</div>
                    <div class="button inline">Cancel</div>
                </div>
            </div>
        </div>
    </body>
</html>