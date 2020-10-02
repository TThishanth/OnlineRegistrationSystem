<script>
   /* Year I Semester II */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIsemesterII").click(function(){
            $("#academicForm #NRyearIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year II Semester II */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIIsemesterII").click(function(){
            $("#academicForm #NRyearIIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year III Semester II General */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIIIsemesterIIgeneral").click(function(){
            $("#academicForm #NRyearIIIsemesterIIgeneral").prop('checked',this.checked);
        });
    });

    /* Year III Semester II Special */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIIIsemesterIIspecial").click(function(){
            $("#academicForm #NRyearIIIsemesterIIspecial").prop('checked',this.checked);
        });
    });
</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemNRyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemNRyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemNRyearIIIsemesterIIgeneral" data-toggle="tab"> Semester II (for General Degree only) </a>
            <a class="dropdown-item" href="#SsemNRyearIIIsemesterIIspecial" data-toggle="tab"> Semester II (for Special Degree only) </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemNRyearIVsemesterII" data-toggle="tab"> Semester II (for Special Degree only)</a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemNRyearIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12201" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12201 </td>
                        <td> Introduction to Environmental Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12202" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12202 </td>
                        <td> Earth Processes </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12203" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12203  </td>
                        <td> Introduction to Hydrology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12204" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12204 </td>
                        <td> Concepts of Ecology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12205" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12205 </td>
                        <td> Fundamentals of Physical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12206" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12206 </td>
                        <td> Fundamentals of Analytical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12107" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12107 </td>
                        <td> Elementary Chemistry Laboratory II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12208" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12208 </td>
                        <td> Graphics and Web Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 12209" id="NRyearIsemesterII"> </th>
                        <td> ESNRM 12209 </td>
                        <td> Fundamentals of Statistics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 1201" id="NRyearIsemesterII"> </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemNRyearIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22101" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22101 </td>
                        <td> Management of Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22102" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22102 </td>
                        <td> Environmental Toxicology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22203" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22203 </td>
                        <td> Remote Sensing and Geographic Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22104" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22104 </td>
                        <td> Practical in Remote Sensing and Geographic Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22205" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22205 </td>
                        <td> Introduction to Economics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22106" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22106 </td>
                        <td> Geomorphology and Geology of Sri Lanka </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22207" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22207 </td>
                        <td> Soil Degradation and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22108" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22108 </td>
                        <td> Earth Science Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22209" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22209 </td>
                        <td> Advanced Statistics II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 22210" id="NRyearIIsemesterII"> </th>
                        <td> ESNRM 22210 </td>
                        <td> Anaatural Resources </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 2201" id="NRyearIIsemesterII"> </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester II table (for General Degree only) -->
    <div role="tabpanel" class="tab-pane" id="SsemNRyearIIIsemesterIIgeneral">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIIIsemesterIIgeneral" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32201" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32201 </td>
                        <td> Cleaner Production and Green Productivity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32202" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32202 </td>
                        <td> Energy Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32203" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32203 </td>
                        <td> Aquatic Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32204" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32204 </td>
                        <td> Coastal and Marine Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32205" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32205 </td>
                        <td> Biogeography </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32206" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32206 </td>
                        <td> Tools for Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32207" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32207 </td>
                        <td> Study and Management of Natural Hazards </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32208" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32208 </td>
                        <td> Biodiversity Conservation and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32209" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32410" id="NRyearIIIsemesterIIgeneral"> </th>
                        <td> ESNRM 32410 </td>
                        <td> B.Sc. Thesis in Environmental Sciences and Natural Resource Management </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year III Semester II table (for Special Degree only) -->
    <div role="tabpanel" class="tab-pane" id="SsemNRyearIIIsemesterIIspecial">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIIIsemesterIIspecial" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32201" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32201 </td>
                        <td> Cleaner Production and Green Productivity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32202" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32202 </td>
                        <td> Energy Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32203" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32203 </td>
                        <td> Aquatic Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32204" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32204 </td>
                        <td> Coastal and Marine Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32105" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32105 </td>
                        <td> Introduction to Biogeography </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32206" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32206 </td>
                        <td> Tools for Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32207" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32207 </td>
                        <td> Study and Management of Natural Hazards </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32208" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32208 </td>
                        <td> Biodiversity Conservation and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32209" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 32110" id="NRyearIIIsemesterIIspecial"> </th>
                        <td> ESNRM 32110 </td>
                        <td> Community Outreach Program /Mini Project </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemNRyearIVsemesterII">
        <div class="container py-5"> 
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
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="ESNRM 42801"> </th>
                        <td> ESNRM 42801 </td>
                        <td> B.Sc. Thesis in Environmental Sciences and Natural Resource Management and Presentation </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II table -->

</div>