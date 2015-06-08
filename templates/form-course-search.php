<div class="row">
    <div class="col-sm-6">
        <div class="course-search search-table-cell search-forms-match">
            <span class="title">Training courses in your area</span>
            <form id="query-courses" action="/find-courses/" method="POST">
                <fieldset id="location">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="input-group">
                                <label for="cs-location" class="sr-only">Postcode</label>
                                <input id="cs-location" class="queryMe cs-location form-control" placeholder="Postcode" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-pad-l-0">
                            <div class="input-group">
                                <label for="cs-distance" class="sr-only">Distance</label>
                                <div class="cs-distance-suround">
                                    <select name="cs-distance" id="cs-distance" class="queryMe cs-distance form-control">
                                        <!--<option value="">Distance (select)</option>-->
                                        <option value="250">0-250 miles</option>
                                        <option value="150">0-150 miles</option>
                                        <option value="100">0-100 miles</option>
                                        <option value="50">0-50 miles</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset id="course-name">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <label for="cs-course-name" class="sr-only">Course name or keywords</label>
                                <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input autocomplete="off" id="course-keywords" class="queryMe cs-course-name ui-autocomplete-input form-control" placeholder="Course name or keywords" type="text">
                            </div>

                        </div>
                    </div>

                    <div onclick="_gaq.push(['_trackEvent', 'PSS_Enquire', 'HomepageSearch']);" class="faux-submit btn-greyed" title="Please enter search details before proceeding">Find courses in your area <span>Please search above</span></div>
                    <input name="coursesID" class="queryMe" type="hidden">
                </fieldset>
            </form>
        </div>    
    </div>
    <div class="col-sm-6">
        <div class="e-learning-courses search-table-cell search-forms-match">
            <span class="newtag">New</span>
            <span class="title">Search E-Learning Courses</span>
            <span class="e-learning-courses-content"><?php echo get_option('landing-ecourse'); ?></span>
            <fieldset id="course-name">
                <div class="input-group">
                    <label for="cs-course-name" class="sr-only">Course name or keywords</label>
                    <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input autocomplete="off" id="e-course-keywords" class="cs-course-name ui-autocomplete-input form-control" placeholder="Course name or keywords" type="text">
                </div>

                <a id="find-e-learning" class="faux-submit btn-greyed">Find E-Learning Courses</a>
            </fieldset>
        </div>
    </div>
</div>


