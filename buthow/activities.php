
        <div id="Lower">
            <div class="createSide">
                <div><b>Create</b></div>
                <a href="./__newTask.php"><div class="button">New Task</div></a>
                <a href="./__newEvent.php"><div class="button">New Event</div></a>
                <a href="./__newCall.php"><div class="button">New Call</div></a>
            </div>
            <div>
                <form class="filters" name="activity-filters"  method="post">
                    <div>
                        <div class="inline"><b>Keywords:</b><input type="text" name="keywords" class="text1"></div>
                        <a href="#"><div class="button inline">Apply</div></a>
                        <a href="#"><div class="button inline flip">能用？？？？？？？</div></a>

                    </div>
                    <div class="collapse">
                        <div class="box1">
                            <div><input type="checkbox" id="param-1"><label for="param-1"><b>All Activities</b></label></div>
                            <div><input type="checkbox" id="param-1-1"><label for="param-1-1">Open Activities</label></div>
                            <div><input type="checkbox" id="param-1-2"><label for="param-1-2">Closed Activities</label></div>
                            <div><input type="checkbox" id="param-1-3"><label for="param-1-3">My Activities</label></div>
                        </div>

                        <div class="box1">
                            <div> <input type="checkbox" id="param-2"><label for="param-2"><b>All Tasks</b></label> </div>
                            <div> <input type="checkbox" id="param-2-1"><label for="param-2-1">Open Tasks</label> </div>
                            <div> <input type="checkbox" id="param-2-2"><label for="param-2-2">My Open Tasks</label> </div>
                            <div> <input type="checkbox" id="param-2-3"><label for="param-2-3">Overdue Tasks</label> </div>
                            <div> <input type="checkbox" id="param-2-4"><label for="param-2-4">Today's Tasks</label> </div>
                            <div> <input type="checkbox" id="param-2-5"><label for="param-2-5">Closed Tasks</label> </div>
                            <div> <input type="checkbox" id="param-2-6"><label for="param-2-6">Tomorrow's Tasks</label> </div>
                        </div>

                        <div class="box1">
                            <div><input type="checkbox" id="param-3"><label for="param-3"><b>All Events</b></label></div>
                            <div><input type="checkbox" id="param-3-1"><label for="param-3-1">My Events</label></div>
                            <div><input type="checkbox" id="param-3-2"><label for="param-3-2">Today's Events</label></div>
                            <div><input type="checkbox" id="param-3-3"><label for="param-3-3">This Week's Events</label></div>
                            <div><input type="checkbox" id="param-3-3"><label for="param-3-4">Open Events</label></div>
                        </div>

                        <div class="box1">
                            <div><input type="checkbox" id="param-4"><label for="param-4"><b>All Calls</b></label></div>
                            <div><input type="checkbox" id="param-4-1"><label for="param-4-1">My Calls</label></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="Main">
                <div>
                    <a href="#"><div class="button"><b>Delete</b></div></a>
                </div>

                <table id="activities" class="List">
                    <tr>
                        <th width="65"></th>
                        <th><input type="checkbox" name="check0"></th>
                        <th>Subject</th>
                        <th>Activity Type</th>
                        <th>Start Date Time</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Priority</th>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record1"></td>
                        <td><a href="http://www.youtube.com">Do a test</a></td>
                        <td>Appointment</td>
                        <td>10/10/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record2"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record3"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record4"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record5"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record6"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record7"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record8"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record9"></td>
                        <td><a href="">Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="record10"></td>
                        <td><div>Do another test</a></td>
                        <td>Appointment</td>
                        <td>10/11/2013 06:00 AM</td>
                        <td>12/12/2013</td>
                        <td>Open</td>
                        <td>High</td>
                    </tr>

                </table>

                <div class="left">

                    <a href="#"><div class="pages inline"><b>&laquo;</b></div></a>
                    <a href="#"><div class="pages inline"><b>&lsaquo;</b></div></a>
                    <a href="#"><div class="pages inline"><b>1</b></div></a>
                    <a href="#"><div class="pages inline"><b>2</b></div></a>
                    <a href="#"><div class="pages inline"><b>3</b></div></a>
                    <a href="#"><div class="pages inline"><b>4</b></div></a>
                    <a href="#"><div class="pages inline"><b>5</b></div></a>
                    <a href="#"><div class="pages inline"><b>&rsaquo;</b></div></a>
                    <a href="#"><div class="pages inline"><b>&raquo;</b></div></a>


                    <div class="inline">Page: </div>
                    <div class="inline"><input type="text" class="text2"></div>
                    <a href="#"><div class="inline button">Go</div></a>

                </div>


            </div>


        </div>
