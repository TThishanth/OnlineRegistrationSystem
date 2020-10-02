<script>
    /* Year I Semester II */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIsemesterII").click(function(){
            $("#academicForm #PEDyearIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year II Semester II */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIIsemesterII").click(function(){
            $("#academicForm #PEDyearIIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year III Semester II */
    $(document).ready(function(){
        $("#academicForm #selectPEDyearIIIsemesterII").click(function(){
            $("#academicForm #PEDyearIIIsemesterII").prop('checked',this.checked);
        });
    });
</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPEDyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPEDyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPEDyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPEDyearIVsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemPEDyearIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12001" id="PEDyearIsemesterII"> </th>
                        <td> PED 12001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12102" id="PEDyearIsemesterII"> </th>
                        <td> PED 12102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events -Jumps) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12103" id="PEDyearIsemesterII"> </th>
                        <td> PED 12103  </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Badminton </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12104" id="PEDyearIsemesterII"> </th>
                        <td> PED 12104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Netball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12105" id="PEDyearIsemesterII"> </th>
                        <td> PED 12105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Volleyball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12206" id="PEDyearIsemesterII"> </th>
                        <td> PED 12206 </td>
                        <td> Basics of Education Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12207" id="PEDyearIsemesterII"> </th>
                        <td> PED 12207 </td>
                        <td> Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12308" id="PEDyearIsemesterII"> </th>
                        <td> PED 12308 </td>
                        <td> Introduction to General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12209" id="PEDyearIsemesterII"> </th>
                        <td> PED 12209 </td>
                        <td> History of Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12110" id="PEDyearIsemesterII"> </th>
                        <td> PED 12110 </td>
                        <td> Aerobics and Rhythmic Activities </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 12211" id="PEDyearIsemesterII"> </th>
                        <td> PED 12211 </td>
                        <td> Applications of Information Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 1201" id="PEDyearIsemesterII"> </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemPEDyearIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22001" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22102" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Cricket </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22103" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Rugby </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22104" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Judo </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22105" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Table Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22106" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22106 </td>
                        <td> Comparative Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22207" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22207 </td>
                        <td> Practicum – Level II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22208" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22208 </td>
                        <td> Physical Education in Pre-school & Primary Schools </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22209" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22209 </td>
                        <td> Sport Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22110" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22110 </td>
                        <td> Dance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22311" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22311 </td>
                        <td> Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22212" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22212 </td>
                        <td> Statistics for Data Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22113" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22113 </td>
                        <td> German Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22114" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22114 </td>
                        <td> Spanish Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 22115" id="PEDyearIIsemesterII"> </th>
                        <td> PED 22115 </td>
                        <td> Chinese Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 2201" id="PEDyearIIsemesterII"> </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemPEDyearIIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPEDyearIIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32001" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32202" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32202 </td>
                        <td> Specialization of a Selected Sport – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32203" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32203 </td>
                        <td> Practicum – Level IV </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32204" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32204 </td>
                        <td> Sociology of Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32205" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32205 </td>
                        <td> Sport and Education Law </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32106" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32106 </td>
                        <td> Sport Facility Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32207" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32207 </td>
                        <td> Management Process in Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32208" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32208 </td>
                        <td> Research Methodology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32109" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32109 </td>
                        <td> Sport Education Model & Game Sense Approach </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32210" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32210 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32211" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32211 </td>
                        <td> Strength and Conditioning </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32112" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32112 </td>
                        <td> Success in Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 32113" id="PEDyearIIIsemesterII"> </th>
                        <td> PED 32113 </td>
                        <td> Guidance and Counseling </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemPEDyearIVsemesterII">
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
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PED 42801"> </th>
                        <td> PED 42801 </td>
                        <td> B.Sc. Research Project in Physical Education </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II table -->

</div>