<script>
    /* Year I Semester I */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIsemesterI").click(function(){
            $("#academicForm #PEDyearIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year II Semester I */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIIsemesterI").click(function(){
            $("#academicForm #PEDyearIIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year III Semester I */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIIIsemesterI").click(function(){
            $("#academicForm #PEDyearIIIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year IV Semester I */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIVsemesterI").click(function(){
            $("#academicForm #PEDyearIVsemesterI").prop('checked',this.checked);
        });
    });

</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPEDyearIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPEDyearIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPEDyearIIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPEDyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemPEDyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5" wfd-id="2"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11101" id="PEDyearIsemesterI"> </th>
                        <td> PED 11101 </td>
                        <td> Foundation of Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11102" id="PEDyearIsemesterI"> </th>
                        <td> PED 11102 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11103" id="PEDyearIsemesterI"> </th>
                        <td> PED 11103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Track Events) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11104" id="PEDyearIsemesterI"> </th>
                        <td> PED 11104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Gymnastics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11105" id="PEDyearIsemesterI"> </th>
                        <td> PED 11105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Swimming & Life Saving </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11106" id="PEDyearIsemesterI"> </th>
                        <td> PED 11106 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Basketball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11107" id="PEDyearIsemesterI"> </th>
                        <td> PED 11107 </td>
                        <td> Fundamental Motor Skills and Practices of Games </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11308" id="PEDyearIsemesterI"> </th>
                        <td> PED 11308 </td>
                        <td> Systemic Anatomy & Basic Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11209" id="PEDyearIsemesterI"> </th>
                        <td> PED 11209 </td>
                        <td> Fundamentals of Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 11210" id="PEDyearIsemesterI"> </th>
                        <td> PED 11210 </td>
                        <td> Introduction to Information Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 1101" id="PEDyearIsemesterI"> </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemPEDyearIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21001" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21102" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events -Throws) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21103" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Elle </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21104" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Karate </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21105" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21206" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21206 </td>
                        <td> Practicum – Level I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21207" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21207 </td>
                        <td> Basic Statistics and Introduction to Statistical Software </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21208" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21208 </td>
                        <td> Sport Biomechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21209" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21209 </td>
                        <td> Exercise Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21210" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21210 </td>
                        <td> Education Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21211" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21211 </td>
                        <td> Safety and Injury Prevention </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21112" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21112 </td>
                        <td> German Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21113" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21113 </td>
                        <td> Spanish Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 21114" id="PEDyearIIsemesterI"> </th>
                        <td> PED 21114 </td>
                        <td> Chinese Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 2101" id="PEDyearIIsemesterI"> </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemPEDyearIIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31001" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31102" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Hockey </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31103" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Baseball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31104" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Soccer </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31105" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Weight Lifting </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31206" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31206 </td>
                        <td> Physical Education in Secondary & Tertiary Institutions </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31207" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31207 </td>
                        <td> Practicum – Level III </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31208" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31208 </td>
                        <td> Advanced Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31209" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31209 </td>
                        <td> Sport Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31210" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31210 </td>
                        <td> Curriculum Perspective and Issues in Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 31211" id="PEDyearIIIsemesterI"> </th>
                        <td> PED 31211 </td>
                        <td> Test, Measurement & Evaluation of Physical Activity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemPEDyearIVsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIVsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41201" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41201 </td>
                        <td> Specialization of a Selected Sport – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41202" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41202 </td>
                        <td> Health & Health Behavior </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41203" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41203 </td>
                        <td> Outdoor Recreations and Leadership </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41204" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41204 </td>
                        <td> Adaptive Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41105" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41105 </td>
                        <td> Science of Yoga and Relaxation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41206" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41206 </td>
                        <td> Community Service Project </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41207" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41207 </td>
                        <td> Sport Therapy </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41108" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41108 </td>
                        <td> Professional Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41109" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41109 </td>
                        <td> Reflective Practice in Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41210" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41210 </td>
                        <td> Long Term Athlete Development (LTAD) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41111" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41111 </td>
                        <td> Olympism </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41112" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41112 </td>
                        <td> International Politics & Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41113" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41113 </td>
                        <td> Traditional Sports in Sri Lanka </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41114" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41114 </td>
                        <td> Drugs and Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PED 41115" id="PEDyearIVsemesterI"> </th>
                        <td> PED 41115 </td>
                        <td> Sport Administration Structure </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>