<div class="box2">
    <h3>All Users</h3>
    
    <div class="scroll-panel" id="users">
        <div class="t0">
            <span><input type="checkbox"></span>
            <span class="usernames" onclick="javascript:window.location.href='__usersnpermissions.php?usernames=Meng Li&usersgroup=Administrator'">
                Meng Li
            </span>
            <span class="right">
                <select name="usergroup">
                    <option value="user">User</option>
                    <option value="superuser">Super User</option>
                    <option value="administrator"  selected="selected">Administrator</option>
                    <option value="superadministrator">Super Administrator</option>
                </select>
            </span>
        </div>
        <div class="t0">
            <span><input type="checkbox"></span>
            <span class="usernames" onclick="javascript:window.location.href='__usersnpermissions.php?usernames=John Smith&usersgroup=Super User'">
                John Smith
            </span>
            <span class="right">
                <select name="usergroup">
                    <option value="user">User</option>
                    <option value="superuser" selected="selected">Super User</option>
                    <option value="administrator">Administrator</option>
                    <option value="superadministrator">Super Administrator</option>
                </select>
            </span>
        </div>                                       
              
        <form class="t0">
            <span><input type="checkbox"></span>
            <span class="usernames" onclick="javascript:window.location.href='__usersnpermissions.php?usernames=George Washington&usersgroup=User'">
                George Washington
            </span>
            <span class="right">
                <select name="usersgroup">
                    <option value="user" selected="selected">User</option>
                    <option value="superuser">Super User</option>
                    <option value="administrator">Administrator</option>
                    <option value="superadministrator">Super Administrator</option>
                </select>
            </span>
        </form>                       

        <div >
            <div class="inline button">Delete</div>
            <div class="inline button">New</div>
        </div>

    </div>
</div>