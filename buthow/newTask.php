
<div id="Lower">
    <div id="create-activities">
        <div><b>Create</b></div>
        <div class="button">New Task</div>
        <div class="button">New Event</div>
        <div class="button">New Call</div>
    </div>
    <div class="Main">
        <div> <h2>Create Task</h2></div>
        <table class="detail">
            <tr>
                <td class="tdl">*Subject</td>
                <td><input type="text" class="text1"></td>
            </tr>
            <tr>
                <td class="tdl">Task Owner</td>
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
                <td class="tdl">Priority</td>
                <td><select name="Priority">
                        <option value="high">High</option>
                        <option value="normal">Normal</option>
                        <option value="low">Low</option>
                    </select></td>
            </tr>
            <tr>
                <td class="tdl">Status</td>
                <td><select name="">
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                        <option value="overdue" selected="selected">Overdue</option>
                    </select></td>
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
