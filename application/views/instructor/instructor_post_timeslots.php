                <h3>Post Timeslots</h3>
            </div>
            <div data-role="content" data-theme="e" style="#">
                <?php echo form_open('instructor/postTimeslots'); ?>
                    <label for="mydate">Date</label>
                    <input name="date" id="date" type="date" data-role="datebox" data-options='{"mode": "calbox", "overrideDateFormat": "%Y-%m-%d"}'>      

                    <label for="time1">Time 1</label>
                    <input name="time1" id="time1" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <label>Time 1 Duration:</label>
                    <select name="duration1" id="duration1">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time2">Time 2</label>
                    <input name="time2" id="time2" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <label>Time 2 Duration:</label>
                    <select name="duration2" id="duration2">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time3">Time 3</label>
                    <input name="time3" id="time3" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <label>Time 3 Duration:</label>
                    <select name="duration3" id="duration3">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time4">Time 4</label>
                    <input name="time4" id="time4" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <label>Time 4 Duration:</label>
                    <select name="duration4" id="duration4">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time5">Time 5</label>
                    <input name="time5" id="time5" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <label>Time 5 Duration:</label>
                    <select name="duration5" id="duration5">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <label for="time6">Time 6</label>
                    <input name="time6" id="time6" type="date" data-role="datebox" data-options='{"mode": "timebox", "overrideTimeFormat": 24, "overrideTimeOutput": "%k:%M"}'>
                    <label>Time 6 Duration:</label>
                    <select name="duration6" id="duration6">
                        <option value=1800>0.5 Hours</option>
                        <option value=3600>1 Hour</option>
                        <option value=5400>1.5 Hours</option>
                        <option value=7200>2 Hours</option>
                    </select>
                    <input type="submit" value="Save">
                </form>
            </div>