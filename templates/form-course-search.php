<div class="row">
    <div class="col-sm-6">
        <div class="course-search search-table-cell">
            <span class="title">Training courses in your area</span>
            <form id="query-courses" action="/find-courses/" method="POST">
                <fieldset id="location">
                    <label for="cs-location" class="visuallyhidden">Postcode</label>
                    <input id="cs-location" class="queryMe cs-location" placeholder="Postcode" value="" autofocus="" type="text">
                    <label for="cs-distance" class="visuallyhidden">Distance</label>
                    <select name="cs-distance" id="cs-distance" class="queryMe cs-distance">
                        <!--<option value="">Distance (select)</option>-->
                        <option value="250">0-250 miles</option>
                        <option value="150">0-150 miles</option>
                        <option value="100">0-100 miles</option>
                        <option value="50">0-50 miles</option>
                    </select>
                </fieldset>
                <fieldset id="course-name">
                    <label for="cs-course-name" class="visuallyhidden">Course name or keywords</label>
                    <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input autocomplete="off" id="course-keywords" class="queryMe cs-course-name ui-autocomplete-input" placeholder="Course name or keywords" type="text">
                    <div onclick="_gaq.push(['_trackEvent', 'PSS_Enquire', 'HomepageSearch']);" class="faux-submit btn-greyed" title="Please enter search details before proceeding">Find courses in your area <span>Please search above</span></div>
                    <input name="coursesID" class="queryMe" type="hidden">
                </fieldset>
            </form>
        </div>    
    </div>
    <div class="col-sm-6">
        <div class="e-learning-courses search-table-cell">
            <span class="newtag">New</span>
            <span class="title">Search E-Learning Courses</span>
            <span class="e-learning-courses-content">Save over 30% per person by learning online using reading material, video/audio, games and exercises.</span>
            <fieldset id="course-name">
                <label for="cs-course-name" class="visuallyhidden">Course name or keywords</label>
                <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input autocomplete="off" id="e-course-keywords" class="cs-course-name ui-autocomplete-input" placeholder="Course name or keywords" type="text">
                <a id="find-e-learning" class="faux-submit btn-greyed">Find E-Learning Courses</a>
            </fieldset>
        </div>
    </div>
</div>


