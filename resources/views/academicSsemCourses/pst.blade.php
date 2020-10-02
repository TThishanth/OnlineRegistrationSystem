<script>
    /* Year I Semester II */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIsemesterII").click(function(){
            $("#academicForm #PSTyearIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year II Semester II */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIsemesterII").click(function(){
            $("#academicForm #PSTyearIIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year III Semester II Special Physics */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIIspecialphysics").click(function(){
            $("#academicForm #PSTyearIIIsemesterIIspecialphysics").prop('checked',this.checked);
        });
    });

    /* Year III Semester II Special Chemical */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIIspecialchemical").click(function(){
            $("#academicForm #PSTyearIIIsemesterIIspecialchemical").prop('checked',this.checked);
        });
    });

    /* Year III Semester II Special CST */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIIspecialcst").click(function(){
            $("#academicForm #PSTyearIIIsemesterIIspecialcst").prop('checked',this.checked);
        });
    });
</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPSTyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPSTyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III ( Special Degree ) </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPSTyearIIIsemesterIIspecialphysics" data-toggle="tab"> Semester II ( Applied Physics )</a>
            <a class="dropdown-item" href="#SsemPSTyearIIIsemesterIIspecialchemical" data-toggle="tab"> Semester II ( Chemical Technology )</a>
            <a class="dropdown-item" href="#SsemPSTyearIIIsemesterIIspecialcst" data-toggle="tab"> Semester II ( Computer Science and Technology )</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV ( Special Degree ) </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemPSTyearIVsemesterIIspecialphysics" data-toggle="tab"> Semester II ( Applied Physics )</a>
            <a class="dropdown-item" href="#SsemPSTyearIVsemesterIIspecialchemical" data-toggle="tab"> Semester II ( Chemical Technology )</a>
            <a class="dropdown-item" href="#SsemPSTyearIVsemesterIIspecialcst" data-toggle="tab"> Semester II ( Computer Science and Technology )</a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12201" id="PSTyearIsemesterII"> </th>
                        <td> PST 12201 </td>
                        <td> Physics of Heat and Waves </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12102" id="PSTyearIsemesterII"> </th>
                        <td> PST 12102 </td>
                        <td> Semi-Conductor Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12103" id="PSTyearIsemesterII"> </th>
                        <td> PST 12103  </td>
                        <td> AC Theory & Circuits </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12104" id="PSTyearIsemesterII"> </th>
                        <td> PST 12104 </td>
                        <td> Physics Laboratory 1-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12205" id="PSTyearIsemesterII"> </th>
                        <td> PST 12205 </td>
                        <td> Fundamentals of Physical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12206" id="PSTyearIsemesterII"> </th>
                        <td> PST 12206 </td>
                        <td> Fundamentals of Analytical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12107" id="PSTyearIsemesterII"> </th>
                        <td> PST 12107 </td>
                        <td> Elementary Chemistry Laboratory II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12208" id="PSTyearIsemesterII"> </th>
                        <td> PST 12208 </td>
                        <td> Object Oriented Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12209" id="PSTyearIsemesterII"> </th>
                        <td> PST 12209 </td>
                        <td> Fundamentals of Statistics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12110" id="PSTyearIsemesterII"> </th>
                        <td> PST 12110 </td>
                        <td> Computer Laboratory 1-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 12211" id="PSTyearIsemesterII"> </th>
                        <td> PST 12211 </td>
                        <td> Database Management Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 1201" id="PSTyearIsemesterII"> </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22201" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22201 </td>
                        <td> Physics of Electromagnetic Radiation and Introduction to the Laser </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22202" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22202 </td>
                        <td> Quantum Physics, Atomic & Nuclear Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22103" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22103 </td>
                        <td> Physics Laboratory 2-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22204" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22204 </td>
                        <td> Chemistry of Elements </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22205" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22205 </td>
                        <td> Physical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22106" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22106 </td>
                        <td> Inorganic Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22207" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22207 </td>
                        <td> Biochemistry I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22208" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22208 </td>
                        <td> Software Engineering </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22209" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22209 </td>
                        <td> Advanced Statistics II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22110" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22110 </td>
                        <td> Computer Laboratory 2-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22211" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22211 </td>
                        <td> Operating Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22112" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22112 </td>
                        <td> Leadership and Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22213" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22213 </td>
                        <td> Biology for Physical Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22114" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22114 </td>
                        <td> Soft Skill Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 22215" id="PSTyearIIsemesterII"> </th>
                        <td> PST 22215 </td>
                        <td> Mathematical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 2201" id="PSTyearIIsemesterII"> </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester II Special Degree table ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIIIsemesterIIspecialphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIIspecialphysics" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32201" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32201 </td>
                        <td> Statistical Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32202" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32202 </td>
                        <td> Interaction of Radiation with Matter </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32103" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32103 </td>
                        <td> Nuclear Physics & Applications </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32204" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32204 </td>
                        <td> Advanced Electronics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32205" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32205 </td>
                        <td> Solid State Devices </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32206" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32206 </td>
                        <td> Astrophysics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32207" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32207 </td>
                        <td> Atomic and Molecular Spectroscopy </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32108" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32108 </td>
                        <td> Current Topics in Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32209" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32210" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32210 </td>
                        <td> Statistics in Quality Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32111" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32111 </td>
                        <td> Physics Laboratory 3-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32212" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32212 </td>
                        <td> Graph Theory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32213" id="PSTyearIIIsemesterIIspecialphysics"> </th>
                        <td> PST 32213 </td>
                        <td> Cleaner Production & Green Productivity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II Special Degree table ( Applied Physics ) -->

    <!-- Year III Semester II Special Degree table ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIIIsemesterIIspecialchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIIspecialchemical" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32214" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32214 </td>
                        <td> Chemistry of Drug Design and Drug </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32215" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32215 </td>
                        <td> Polymer Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32216" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32216 </td>
                        <td> Surface and Colloid Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32117" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32117 </td>
                        <td> Food Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32118" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32118 </td>
                        <td> Advanced Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32119" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32119 </td>
                        <td> Current Topics in Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32220" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32220 </td>
                        <td> Structures and Properties of Solids </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32121" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32121 </td>
                        <td> Advanced Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32209" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32210" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32210 </td>
                        <td> Statistics in Quality Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32222" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32222 </td>
                        <td> Organometallic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32213" id="PSTyearIIIsemesterIIspecialchemical"> </th>
                        <td> PST 32213 </td>
                        <td> Cleaner Production & Green Productivity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II Special Degree table ( Chemical Technology ) -->

    <!-- Year III Semester II Special Degree table ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIIIsemesterIIspecialcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIIspecialcst" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32223" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32223 </td>
                        <td> Artificial Neural Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32224" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32224 </td>
                        <td> Digital Image Processing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32225" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32225 </td>
                        <td> Data Mining and Practical Machine Learning </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32226" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32226 </td>
                        <td> Human Computer Interactions </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32227" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32227 </td>
                        <td> Data Communication and Computer Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32228" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32228 </td>
                        <td> Computer Graphics & Applications </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32229" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32229 </td>
                        <td> Mobile Computing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32230" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32230 </td>
                        <td> Semantic Web </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32231" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32231 </td>
                        <td> Bioinformatics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32132" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32132 </td>
                        <td> Current Topics in Computer Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32133" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32133 </td>
                        <td> Computer Laboratory 3-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32205" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32205 </td>
                        <td> Solid State Devices </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32209" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32210" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32210 </td>
                        <td> Statistics in Quality Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32212" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32212 </td>
                        <td> Graph Theory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 32213" id="PSTyearIIIsemesterIIspecialcst"> </th>
                        <td> PST 32213 </td>
                        <td> Cleaner Production & Green Productivity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II Special Degree table ( Computer Science and Technology ) -->

    <!-- Year IV Semester II Special Degree table  ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIVsemesterIIspecialphysics">
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
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 42801"> </th>
                        <td> PST 42801 </td>
                        <td> Project Work (Industrial Exposure): B.Sc. Thesis in Applied Physics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II Special Degree table ( Applied Physics ) -->

    <!-- Year IV Semester II Special Degree table  ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIVsemesterIIspecialchemical">
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
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 42802"> </th>
                        <td> PST 42802 </td>
                        <td> Project Work (Industrial Exposure): B.Sc. Thesis in Chemical Technology </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II Special Degree table ( Chemical Technology ) -->

    <!-- Year IV Semester II Special Degree table  ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="SsemPSTyearIVsemesterIIspecialcst">
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
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="PST 42803"> </th>
                        <td> PST 42803 </td>
                        <td> Project Work (Industrial Exposure): B.Sc. Thesis in Computer Science and Technology </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II Special Degree table ( Computer Science and Technology ) -->

</div>