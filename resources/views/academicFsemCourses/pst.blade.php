<script>
    /* Year I Semester I */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIsemesterI").click(function(){
            $("#academicForm #PSTyearIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year II Semester I */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIsemesterI").click(function(){
            $("#academicForm #PSTyearIIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year III Semester I General Physics */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIgeneralphysics").click(function(){
            $("#academicForm #PSTyearIIIsemesterIgeneralphysics").prop('checked',this.checked);
        });
    });

    /* Year III Semester I General Chemical */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIgeneralchemical").click(function(){
            $("#academicForm #PSTyearIIIsemesterIgeneralchemical").prop('checked',this.checked);
        });
    });

    /* Year III Semester I CST */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIgeneralcst").click(function(){
            $("#academicForm #PSTyearIIIsemesterIgeneralcst").prop('checked',this.checked);
        });
    });

    /* Year III Semester I Special Physics */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIspecialphysics").click(function(){
            $("#academicForm #PSTyearIIIsemesterIspecialphysics").prop('checked',this.checked);
        });
    });

    /* Year III Semester I Special Chemical */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIspecialchemical").click(function(){
            $("#academicForm #PSTyearIIIsemesterIspecialchemical").prop('checked',this.checked);
        });
    });

    /* Year III Semester I Special CST */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIIIsemesterIspecialcst").click(function(){
            $("#academicForm #PSTyearIIIsemesterIspecialcst").prop('checked',this.checked);
        });
    });

    /* Year IV Semester I Special Physics */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIVsemesterIspecialphysics").click(function(){
            $("#academicForm #PSTyearIVsemesterIspecialphysics").prop('checked',this.checked);
        });
    });

    /*Year IV Semester I Special Chemical */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIVsemesterIspecialchemical").click(function(){
            $("#academicForm #PSTyearIVsemesterIspecialchemical").prop('checked',this.checked);
        });
    });

    /*Year IV Semester I Special CST */
    $(document).ready(function(){
        $("#academicForm #selectPSTyearIVsemesterIspecialcst").click(function(){
            $("#academicForm #PSTyearIVsemesterIspecialcst").prop('checked',this.checked);
        });
    });

</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPSTyearIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPSTyearIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III ( General Degree )</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPSTyearIIIsemesterIgeneralphysics" data-toggle="tab"> Semester I ( Majoring in Physics ) </a>
            <a class="dropdown-item" href="#FsemPSTyearIIIsemesterIgeneralchemical" data-toggle="tab"> Semester I ( Majoring Chemical Technology ) </a>
            <a class="dropdown-item" href="#FsemPSTyearIIIsemesterIgeneralcst" data-toggle="tab"> Semester I ( Majoring Computer Science and Technology ) </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III ( Special Degree ) </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPSTyearIIIsemesterIspecialphysics" data-toggle="tab"> Semester I ( Applied Physics )</a>
            <a class="dropdown-item" href="#FsemPSTyearIIIsemesterIspecialchemical" data-toggle="tab"> Semester I ( Chemical Technology )</a>
            <a class="dropdown-item" href="#FsemPSTyearIIIsemesterIspecialcst" data-toggle="tab"> Semester I ( Computer Science and Technology )</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV ( Special Degree ) </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemPSTyearIVsemesterIspecialphysics" data-toggle="tab"> Semester I ( Applied Physics )</a>
            <a class="dropdown-item" href="#FsemPSTyearIVsemesterIspecialchemical" data-toggle="tab"> Semester I ( Chemical Technology )</a>
            <a class="dropdown-item" href="#FsemPSTyearIVsemesterIspecialcst" data-toggle="tab"> Semester I ( Computer Science and Technology )</a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5" wfd-id="2"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11201" id="PSTyearIsemesterI"> </th>
                        <td> PST 11201 </td>
                        <td> Mechanics and Properties of Matter </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11202" id="PSTyearIsemesterI"> </th>
                        <td> PST 11202 </td>
                        <td> Introduction to Electricity and Magnetism </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11103" id="PSTyearIsemesterI"> </th>
                        <td> PST 11103 </td>
                        <td> Physics Laboratory 1-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11204" id="PSTyearIsemesterI"> </th>
                        <td> PST 11204 </td>
                        <td> General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11205" id="PSTyearIsemesterI"> </th>
                        <td> PST 11205 </td>
                        <td> Fundamentals of Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11106" id="PSTyearIsemesterI"> </th>
                        <td> PST 11106 </td>
                        <td> Elementary Chemistry Laboratory I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11207" id="PSTyearIsemesterI"> </th>
                        <td> PST 11207 </td>
                        <td> Structured Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11208" id="PSTyearIsemesterI"> </th>
                        <td> PST 11208 </td>
                        <td> Computer Hardware and Software </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11109" id="PSTyearIsemesterI"> </th>
                        <td> PST 11109 </td>
                        <td> Computer Laboratory 1-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 11210" id="PSTyearIsemesterI"> </th>
                        <td> PST 11210 </td>
                        <td> Calculus and Differential Equations </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 1101" id="PSTyearIsemesterI"> </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21201" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21201 </td>
                        <td> Electronics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21202" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21202 </td>
                        <td> Geometrical and Physical Optics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21103" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21103 </td>
                        <td> Physics Laboratory 2-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21204" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21204 </td>
                        <td> Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21205" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21205 </td>
                        <td> Industrial Chemistry and Technology I (Organic) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21106" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21106 </td>
                        <td> Organic Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21207" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21207 </td>
                        <td> Data Structures & Algorithms </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21208" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21208 </td>
                        <td> Computer Architecture and Assembly Language </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21209" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21209 </td>
                        <td> Advanced Statistics I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 21110" id="PSTyearIIsemesterI"> </th>
                        <td> PST 21110 </td>
                        <td> Computer Laboratory 2-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 2101" id="PSTyearIIsemesterI"> </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year III Semester I General Degree table ( Majoring in Physics ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIIsemesterIgeneralphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIgeneralphysics" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31201" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31201 </td>
                        <td> Solid State Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31202" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31202 </td>
                        <td> Atmospheric Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31203" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31203 </td>
                        <td> Quantum Mechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31104" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31104 </td>
                        <td> Material Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31105" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31105 </td>
                        <td> Special Relativity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31206" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31107" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31108" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31108 </td>
                        <td> Physics Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31209" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31010" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31010 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31211" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31112" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31213" id="PSTyearIIIsemesterIgeneralphysics"> </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I General Degree table ( Majoring in Physics ) -->

    <!-- Year III Semester I General Degree table ( Majoring Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIIsemesterIgeneralchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIgeneralchemical" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31215" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31215 </td>
                        <td> Biochemistry II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31216" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31216 </td>
                        <td> Molecular Spectroscopy </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31217" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31217 </td>
                        <td> Electroanalytical Techniques </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31218" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31218 </td>
                        <td> Industrial Chemistry and Technology II (Inorganic) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31219" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31219 </td>
                        <td> Environmental Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31120" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31120 </td>
                        <td> Coordination Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31121" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31121 </td>
                        <td> Laboratory Quality Control and Assurance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31122" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31122 </td>
                        <td> Physical Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31107" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31010" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31010 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31211" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31112" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31213" id="PSTyearIIIsemesterIgeneralchemical"> </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I General Degree table ( Majoring Chemical Technology ) -->

    <!-- Year III Semester I General Degree table ( Majoring Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIIsemesterIgeneralcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIgeneralcst" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31223" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31223 </td>
                        <td> Artificial Intelligence </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31209" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31224" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31224 </td>
                        <td> Software Project Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31225" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31225 </td>
                        <td> Software Quality Assurances </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31226" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31226 </td>
                        <td> Management Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31227" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31227 </td>
                        <td> Object Oriented Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31228" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31228 </td>
                        <td> Social and Professional Issues </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31229" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31229 </td>
                        <td> Agile Software Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31130" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31130 </td>
                        <td> Computer Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31206" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31010" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31010 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31211" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31112" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31213" id="PSTyearIIIsemesterIgeneralcst"> </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I General Degree table ( Majoring Computer Science and Technology ) -->

    <!-- Year III Semester I Special Degree table ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIIsemesterIspecialphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIspecialphysics" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31201" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31201 </td>
                        <td> Solid State Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31202" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31202 </td>
                        <td> Atmospheric Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31203" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31203 </td>
                        <td> Quantum Mechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31104" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31104 </td>
                        <td> Material Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31105" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31105 </td>
                        <td> Special Relativity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31206" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31107" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31108" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31108 </td>
                        <td> Physics Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31209" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31211" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31112" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31213" id="PSTyearIIIsemesterIspecialphysics"> </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>        
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I Special Degree table ( Applied Physics ) -->

    <!-- Year III Semester I Special Degree table ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIIsemesterIspecialchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIspecialchemical" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31215" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31215 </td>
                        <td> Biochemistry II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31216" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31216 </td>
                        <td> Molecular Spectroscopy </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31217" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31217 </td>
                        <td> Electroanalytical Techniques </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31218" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31218 </td>
                        <td> Industrial Chemistry and Technology II (Inorganic) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31219" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31219 </td>
                        <td> Environmental Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31120" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31120 </td>
                        <td> Coordination Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31121" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31121 </td>
                        <td> Laboratory Quality Control and Assurance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31122" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31122 </td>
                        <td> Physical Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31107" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31211" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31112" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31213" id="PSTyearIIIsemesterIspecialchemical"> </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I Special Degree table ( Chemical Technology ) -->

    <!-- Year III Semester I Special Degree table  ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIIIsemesterIspecialcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIIIsemesterIspecialcst" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31223" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31223 </td>
                        <td> Artificial Intelligence </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31209" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31224" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31224 </td>
                        <td> Software Project Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31225" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31225 </td>
                        <td> Software Quality Assurances </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31226" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31226 </td>
                        <td> Management Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31227" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31227 </td>
                        <td> Object Oriented Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31228" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31228 </td>
                        <td> Social and Professional Issues </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31229" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31229 </td>
                        <td> Agile Software Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31130" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31130 </td>
                        <td> Computer Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31206" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31211" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31112" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 31213" id="PSTyearIIIsemesterIspecialcst"> </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I Special Degree table ( Computer Science and Technology ) -->

    <!-- Year IV Semester I Special Degree table ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIVsemesterIspecialphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIVsemesterIspecialphysics" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41001" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41001 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41202" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41202 </td>
                        <td> Computational Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41203" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41203 </td>
                        <td> Robotics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41204" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41204 </td>
                        <td> Remote Sensing & GIS </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41205" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41205 </td>
                        <td> Geophysics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41206" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41206 </td>
                        <td> Medical and Bio Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41207" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41207 </td>
                        <td> Advanced Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41208" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41208 </td>
                        <td> Data Acquisition and Signal Processing Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41209" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41209 </td>
                        <td> Advanced Laser Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41210" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41210 </td>
                        <td> Automation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41211" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41211 </td>
                        <td> Advanced Astrophysics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41212" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41212 </td>
                        <td> Electrochemical Power Conversion </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41113" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41113 </td>
                        <td> Literature Search Seminar in Applied Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41214" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41214 </td>
                        <td> Independent Research / Project in Applied Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41215" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41215 </td>
                        <td> Industrial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41116" id="PSTyearIVsemesterIspecialphysics"> </th>
                        <td> PST 41116 </td>
                        <td> Critical Thinking </td>
                    </tr>        
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I Special Degree table ( Applied Physics ) -->

    <!-- Year IV Semester I Special Degree table ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIVsemesterIspecialchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIVsemesterIspecialchemical" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41001" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41001 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41217" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41217 </td>
                        <td> Natural Products Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41218" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41218 </td>
                        <td> Biotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41219" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41219 </td>
                        <td> Advanced Solid State Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41120" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41120 </td>
                        <td> Bioinorganic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41221" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41221 </td>
                        <td> Instrumental Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41222" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41222 </td>
                        <td> Applied Molecular Modeling </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41223" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41223 </td>
                        <td> State of Matter </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41124" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41124 </td>
                        <td> Literature Search Seminar in Chemical Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41225" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41225 </td>
                        <td> Independent Research / Project in Chemical Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41226" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41226 </td>
                        <td> Computer Applications in Instrumentation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41207" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41207 </td>
                        <td> Advanced Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41212" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41212 </td>
                        <td> Electrochemical power conversion </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41215" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41215 </td>
                        <td> Industrial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41116" id="PSTyearIVsemesterIspecialchemical"> </th>
                        <td> PST 41116 </td>
                        <td> Critical Thinking </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I Special Degree table ( Chemical Technology ) -->

    <!-- Year IV Semester I Special Degree table  ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="FsemPSTyearIVsemesterIspecialcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectPSTyearIVsemesterIspecialcst" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41201" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41201 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41227" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41227 </td>
                        <td> High Performance Computing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41228" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41228 </td>
                        <td> Computer System Security </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41229" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41229 </td>
                        <td> Advanced Computer Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41230" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41230 </td>
                        <td> Distributed Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41231" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41231 </td>
                        <td> Computer Vision </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41232" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41232 </td>
                        <td> Embedded Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41233" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41233 </td>
                        <td> Business Process Management Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41234" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41234 </td>
                        <td> Fuzzy Logic </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41135" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41135 </td>
                        <td> Literature Search Seminar in Computer Science and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41236" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41236 </td>
                        <td> Independent Research / Project in Computer  Science and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41203" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41203 </td>
                        <td> Robotics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41208" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41208 </td>
                        <td> Data Acquisition and Signal Processing Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41210" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41210 </td>
                        <td> Automation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41215" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41215 </td>
                        <td> Industrial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="PST 41116" id="PSTyearIVsemesterIspecialcst"> </th>
                        <td> PST 41116 </td>
                        <td> Critical Thinking </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I Special Degree table ( Computer Science and Technology ) -->

</div>