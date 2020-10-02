<script>
    /* Year I Semester II */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIsemesterII").click(function(){
            $("#academicForm #FSTyearIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year II Semester II */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIIsemesterII").click(function(){
            $("#academicForm #FSTyearIIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year III Semester II */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIIIsemesterII").click(function(){
            $("#academicForm #FSTyearIIIsemesterII").prop('checked',this.checked);
        });
    });
</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemFSTyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemFSTyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemFSTyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemFSTyearIVsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemFSTyearIsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12201" id="FSTyearIsemesterII"> </th>
                        <td> FST 12201 </td>
                        <td> Fundamentals of  Microbiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12202" id="FSTyearIsemesterII"> </th>
                        <td> FST 12202 </td>
                        <td> Biochemistry  I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12203" id="FSTyearIsemesterII"> </th>
                        <td> FST 12203 </td>
                        <td> Postharvest Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12204" id="FSTyearIsemesterII"> </th>
                        <td> FST 12204 </td>
                        <td> Postharvest Pest and Disease Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12105" id="FSTyearIsemesterII"> </th>
                        <td> FST 12105 </td>
                        <td> Postharvest  Handling  of Food Sources  Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12206" id="FSTyearIsemesterII"> </th>
                        <td> FST 12206	 </td>
                        <td> Fundamentals of  Statistics and Introduction to statistical software </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12207" id="FSTyearIsemesterII"> </th>
                        <td> FST 12207 </td>
                        <td> Analytical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12108" id="FSTyearIsemesterII"> </th>
                        <td> FST 12108 </td>
                        <td> Chemistry Practical II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12209" id="FSTyearIsemesterII"> </th>
                        <td> FST 12209 </td>
                        <td> Graphic and Web Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 12010" id="FSTyearIsemesterII"> </th>
                        <td> FST 12010 </td>
                        <td> Technical /Scientific Writing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 1201" id="FSTyearIsemesterII"> </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemFSTyearIIsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22201" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22201 </td>
                        <td> Biotechnology f or  Food Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22102" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22102 </td>
                        <td> Microbiology and  Biotechnology Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22203" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22203 </td>
                        <td> Food  Process Engineering II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22104" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22104 </td>
                        <td> Food Process Engineering Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22205" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22205 </td>
                        <td> Food Quality Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22206" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22206 </td>
                        <td> Livestock  Production and Aquaculture </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22107" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22107 </td>
                        <td> Livestock  Production and Aquaculture Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22108" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22108 </td>
                        <td> Food Marketing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 22209" id="FSTyearIIsemesterII"> </th>
                        <td> FST 22209 </td>
                        <td> Statistics II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 2201" id="FSTyearIIsemesterII"> </th>
                        <td> CPE 2201 </td>
                        <td> English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemFSTyearIIIsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32201" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32201 </td>
                        <td> Aquatic Food Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32202" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32202 </td>
                        <td> Dairy Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32103" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32103 </td>
                        <td> Dairy Science and Dairy Processing Technology Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32204" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32204 </td>
                        <td> Sugar and Confectionery Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32105" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32105 </td>
                        <td> Beverage Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32106" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32106 </td>
                        <td> Sensory Evaluation of Foods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32107" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32107 </td>
                        <td> Sensory Evaluation of Foods Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32108" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32108 </td>
                        <td> Process  Control   and Automation in Food Industry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32209" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32210" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32210 </td>
                        <td> Cleaner Production  and Green Productivity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 32111" id="FSTyearIIIsemesterII"> </th>
                        <td> FST 32111 </td>
                        <td> Food Science and Technology Seminars </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemFSTyearIVsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="FST 42801"> </th>
                        <td> FST 42801 </td>
                        <td> Research Project in Food Science and Technology </td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II table -->

</div>