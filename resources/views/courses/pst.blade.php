<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PSTyearIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#PSTyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PSTyearIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#PSTyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III ( General Degree )</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PSTyearIIIsemesterIgeneralphysics" data-toggle="tab"> Semester I ( Majoring in Physics ) </a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIgeneralchemical" data-toggle="tab"> Semester I ( Majoring Chemical Technology ) </a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIgeneralcst" data-toggle="tab"> Semester I ( Majoring Computer Science and Technology ) </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III ( Special Degree ) </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PSTyearIIIsemesterIspecialphysics" data-toggle="tab"> Semester I ( Applied Physics )</a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIspecialchemical" data-toggle="tab"> Semester I ( Chemical Technology )</a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIspecialcst" data-toggle="tab"> Semester I ( Computer Science and Technology )</a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIIspecialphysics" data-toggle="tab"> Semester II ( Applied Physics )</a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIIspecialchemical" data-toggle="tab"> Semester II ( Chemical Technology )</a>
            <a class="dropdown-item" href="#PSTyearIIIsemesterIIspecialcst" data-toggle="tab"> Semester II ( Computer Science and Technology )</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV ( Special Degree ) </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PSTyearIVsemesterIspecialphysics" data-toggle="tab"> Semester I ( Applied Physics )</a>
            <a class="dropdown-item" href="#PSTyearIVsemesterIspecialchemical" data-toggle="tab"> Semester I ( Chemical Technology )</a>
            <a class="dropdown-item" href="#PSTyearIVsemesterIspecialcst" data-toggle="tab"> Semester I ( Computer Science and Technology )</a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5" wfd-id="2"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11201') }} </th>
                        <td> PST 11201 </td>
                        <td> Mechanics and Properties of Matter </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11202') }} </th>
                        <td> PST 11202 </td>
                        <td> Introduction to Electricity and Magnetism </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11103') }} </th>
                        <td> PST 11103 </td>
                        <td> Physics Laboratory 1-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11204') }} </th>
                        <td> PST 11204 </td>
                        <td> General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11205') }} </th>
                        <td> PST 11205 </td>
                        <td> Fundamentals of Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11106') }} </th>
                        <td> PST 11106 </td>
                        <td> Elementary Chemistry Laboratory I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11207') }} </th>
                        <td> PST 11207 </td>
                        <td> Structured Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11208') }} </th>
                        <td> PST 11208 </td>
                        <td> Computer Hardware and Software </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11109') }} </th>
                        <td> PST 11109 </td>
                        <td> Computer Laboratory 1-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 11210') }} </th>
                        <td> PST 11210 </td>
                        <td> Calculus and Differential Equations </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 1101') }} </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12201') }} </th>
                        <td> PST 12201 </td>
                        <td> Physics of Heat and Waves </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12102') }} </th>
                        <td> PST 12102 </td>
                        <td> Semi-Conductor Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12103') }} </th>
                        <td> PST 12103  </td>
                        <td> AC Theory & Circuits </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12104') }} </th>
                        <td> PST 12104 </td>
                        <td> Physics Laboratory 1-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12205') }} </th>
                        <td> PST 12205 </td>
                        <td> Fundamentals of Physical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12206') }} </th>
                        <td> PST 12206 </td>
                        <td> Fundamentals of Analytical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12107') }} </th>
                        <td> PST 12107 </td>
                        <td> Elementary Chemistry Laboratory II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12208') }} </th>
                        <td> PST 12208 </td>
                        <td> Object Oriented Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12209') }} </th>
                        <td> PST 12209 </td>
                        <td> Fundamentals of Statistics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12110') }} </th>
                        <td> PST 12110 </td>
                        <td> Computer Laboratory 1-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 12211') }} </th>
                        <td> PST 12211 </td>
                        <td> Database Management Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 1201') }} </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21201') }} </th>
                        <td> PST 21201 </td>
                        <td> Electronics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21202') }} </th>
                        <td> PST 21202 </td>
                        <td> Geometrical and Physical Optics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21103') }} </th>
                        <td> PST 21103 </td>
                        <td> Physics Laboratory 2-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21204') }} </th>
                        <td> PST 21204 </td>
                        <td> Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21205') }} </th>
                        <td> PST 21205 </td>
                        <td> Industrial Chemistry and Technology I (Organic) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21106') }} </th>
                        <td> PST 21106 </td>
                        <td> Organic Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21207') }} </th>
                        <td> PST 21207 </td>
                        <td> Data Structures & Algorithms </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21208') }} </th>
                        <td> PST 21208 </td>
                        <td> Computer Architecture and Assembly Language </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21209') }} </th>
                        <td> PST 21209 </td>
                        <td> Advanced Statistics I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 21110') }} </th>
                        <td> PST 21110 </td>
                        <td> Computer Laboratory 2-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 2101') }} </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22201') }} </th>
                        <td> PST 22201 </td>
                        <td> Physics of Electromagnetic Radiation and Introduction to the Laser </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22202') }} </th>
                        <td> PST 22202 </td>
                        <td> Quantum Physics, Atomic & Nuclear Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22103') }} </th>
                        <td> PST 22103 </td>
                        <td> Physics Laboratory 2-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22204') }} </th>
                        <td> PST 22204 </td>
                        <td> Chemistry of Elements </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22205') }} </th>
                        <td> PST 22205 </td>
                        <td> Physical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22106') }} </th>
                        <td> PST 22106 </td>
                        <td> Inorganic Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22207') }} </th>
                        <td> PST 22207 </td>
                        <td> Biochemistry I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22208') }} </th>
                        <td> PST 22208 </td>
                        <td> Software Engineering </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22209') }} </th>
                        <td> PST 22209 </td>
                        <td> Advanced Statistics II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22110') }} </th>
                        <td> PST 22110 </td>
                        <td> Computer Laboratory 2-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22211') }} </th>
                        <td> PST 22211 </td>
                        <td> Operating Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22112') }} </th>
                        <td> PST 22112 </td>
                        <td> Leadership and Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22213') }} </th>
                        <td> PST 22213 </td>
                        <td> Biology for Physical Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22114') }} </th>
                        <td> PST 22114 </td>
                        <td> Soft Skill Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 22215') }} </th>
                        <td> PST 22215 </td>
                        <td> Mathematical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 2201') }} </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester I General Degree table ( Majoring in Physics ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIgeneralphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31201') }} </th>
                        <td> PST 31201 </td>
                        <td> Solid State Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31202') }} </th>
                        <td> PST 31202 </td>
                        <td> Atmospheric Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31203') }} </th>
                        <td> PST 31203 </td>
                        <td> Quantum Mechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31104') }} </th>
                        <td> PST 31104 </td>
                        <td> Material Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31105') }} </th>
                        <td> PST 31105 </td>
                        <td> Special Relativity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31206') }} </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31107') }} </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31108') }} </th>
                        <td> PST 31108 </td>
                        <td> Physics Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31209') }} </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31010') }} </th>
                        <td> PST 31010 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31211') }} </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31112') }} </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31213') }} </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I General Degree table ( Majoring in Physics ) -->

    <!-- Year III Semester I General Degree table ( Majoring Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIgeneralchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31215') }} </th>
                        <td> PST 31215 </td>
                        <td> Biochemistry II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31216') }} </th>
                        <td> PST 31216 </td>
                        <td> Molecular Spectroscopy </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31217') }} </th>
                        <td> PST 31217 </td>
                        <td> Electroanalytical Techniques </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31218') }} </th>
                        <td> PST 31218 </td>
                        <td> Industrial Chemistry and Technology II (Inorganic) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31219') }} </th>
                        <td> PST 31219 </td>
                        <td> Environmental Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31120') }} </th>
                        <td> PST 31120 </td>
                        <td> Coordination Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31121') }} </th>
                        <td> PST 31121 </td>
                        <td> Laboratory Quality Control and Assurance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31122') }} </th>
                        <td> PST 31122 </td>
                        <td> Physical Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31107') }} </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31010') }} </th>
                        <td> PST 31010 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31211') }} </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31112') }} </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31213') }} </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I General Degree table ( Majoring Chemical Technology ) -->

    <!-- Year III Semester I General Degree table ( Majoring Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIgeneralcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31223') }} </th>
                        <td> PST 31223 </td>
                        <td> Artificial Intelligence </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31209') }} </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31224') }} </th>
                        <td> PST 31224 </td>
                        <td> Software Project Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31225') }} </th>
                        <td> PST 31225 </td>
                        <td> Software Quality Assurances </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31226') }} </th>
                        <td> PST 31226 </td>
                        <td> Management Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31227') }} </th>
                        <td> PST 31227 </td>
                        <td> Object Oriented Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31228') }} </th>
                        <td> PST 31228 </td>
                        <td> Social and Professional Issues </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31229') }} </th>
                        <td> PST 31229 </td>
                        <td> Agile Software Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31130') }} </th>
                        <td> PST 31130 </td>
                        <td> Computer Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31206') }} </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31010') }} </th>
                        <td> PST 31010 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31211') }} </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31112') }} </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31213') }} </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I General Degree table ( Majoring Computer Science and Technology ) -->

    <!-- Year III Semester I Special Degree table ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIspecialphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31201') }} </th>
                        <td> PST 31201 </td>
                        <td> Solid State Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31202') }} </th>
                        <td> PST 31202 </td>
                        <td> Atmospheric Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31203') }} </th>
                        <td> PST 31203 </td>
                        <td> Quantum Mechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31104') }} </th>
                        <td> PST 31104 </td>
                        <td> Material Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31105') }} </th>
                        <td> PST 31105 </td>
                        <td> Special Relativity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31206') }} </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31107') }} </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31108') }} </th>
                        <td> PST 31108 </td>
                        <td> Physics Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31209') }} </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31211') }} </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31112') }} </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31213') }} </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>        
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I Special Degree table ( Applied Physics ) -->

    <!-- Year III Semester I Special Degree table ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIspecialchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31215') }} </th>
                        <td> PST 31215 </td>
                        <td> Biochemistry II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31216') }} </th>
                        <td> PST 31216 </td>
                        <td> Molecular Spectroscopy </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31217') }} </th>
                        <td> PST 31217 </td>
                        <td> Electroanalytical Techniques </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31218') }} </th>
                        <td> PST 31218 </td>
                        <td> Industrial Chemistry and Technology II (Inorganic) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31219') }} </th>
                        <td> PST 31219 </td>
                        <td> Environmental Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31120') }} </th>
                        <td> PST 31120 </td>
                        <td> Coordination Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31121') }} </th>
                        <td> PST 31121 </td>
                        <td> Laboratory Quality Control and Assurance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31122') }} </th>
                        <td> PST 31122 </td>
                        <td> Physical Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31107') }} </th>
                        <td> PST 31107 </td>
                        <td> Introduction to Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31211') }} </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31112') }} </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31213') }} </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I Special Degree table ( Chemical Technology ) -->

    <!-- Year III Semester I Special Degree table  ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIspecialcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31223') }} </th>
                        <td> PST 31223 </td>
                        <td> Artificial Intelligence </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31209') }} </th>
                        <td> PST 31209 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31224') }} </th>
                        <td> PST 31224 </td>
                        <td> Software Project Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31225') }} </th>
                        <td> PST 31225 </td>
                        <td> Software Quality Assurances </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31226') }} </th>
                        <td> PST 31226 </td>
                        <td> Management Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31227') }} </th>
                        <td> PST 31227 </td>
                        <td> Object Oriented Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31228') }} </th>
                        <td> PST 31228 </td>
                        <td> Social and Professional Issues </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31229') }} </th>
                        <td> PST 31229 </td>
                        <td> Agile Software Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31130') }} </th>
                        <td> PST 31130 </td>
                        <td> Computer Laboratory 3-I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31206') }} </th>
                        <td> PST 31206 </td>
                        <td> Optical Fiber & Telecommunication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31211') }} </th>
                        <td> PST 31211 </td>
                        <td> Mathematical Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31112') }} </th>
                        <td> PST 31112 </td>
                        <td> Numerical Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 31213') }} </th>
                        <td> PST 31213 </td>
                        <td> Economics </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I Special Degree table ( Computer Science and Technology ) -->

    <!-- Year III Semester II Special Degree table ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIIspecialphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32201') }} </th>
                        <td> PST 32201 </td>
                        <td> Statistical Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32202') }} </th>
                        <td> PST 32202 </td>
                        <td> Interaction of Radiation with Matter </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32103') }} </th>
                        <td> PST 32103 </td>
                        <td> Nuclear Physics & Applications </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32204') }} </th>
                        <td> PST 32204 </td>
                        <td> Advanced Electronics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32205') }} </th>
                        <td> PST 32205 </td>
                        <td> Solid State Devices </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32206') }} </th>
                        <td> PST 32206 </td>
                        <td> Astrophysics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32207') }} </th>
                        <td> PST 32207 </td>
                        <td> Atomic and Molecular Spectroscopy </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32108') }} </th>
                        <td> PST 32108 </td>
                        <td> Current Topics in Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32209') }} </th>
                        <td> PST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32210') }} </th>
                        <td> PST 32210 </td>
                        <td> Statistics in Quality Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32111') }} </th>
                        <td> PST 32111 </td>
                        <td> Physics Laboratory 3-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32212') }} </th>
                        <td> PST 32212 </td>
                        <td> Graph Theory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32213') }} </th>
                        <td> PST 32213 </td>
                        <td> Cleaner Production & Green Productivity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II Special Degree table ( Applied Physics ) -->

    <!-- Year III Semester II Special Degree table ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIIspecialchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32214') }} </th>
                        <td> PST 32214 </td>
                        <td> Chemistry of Drug Design and Drug </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32215') }} </th>
                        <td> PST 32215 </td>
                        <td> Polymer Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32216') }} </th>
                        <td> PST 32216 </td>
                        <td> Surface and Colloid Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32117') }} </th>
                        <td> PST 32117 </td>
                        <td> Food Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32118') }} </th>
                        <td> PST 32118 </td>
                        <td> Advanced Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32119') }} </th>
                        <td> PST 32119 </td>
                        <td> Current Topics in Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32220') }} </th>
                        <td> PST 32220 </td>
                        <td> Structures and Properties of Solids </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32121') }} </th>
                        <td> PST 32121 </td>
                        <td> Advanced Chemistry Laboratory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32209') }} </th>
                        <td> PST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32210') }} </th>
                        <td> PST 32210 </td>
                        <td> Statistics in Quality Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32222') }} </th>
                        <td> PST 32222 </td>
                        <td> Organometallic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32213') }} </th>
                        <td> PST 32213 </td>
                        <td> Cleaner Production & Green Productivity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II Special Degree table ( Chemical Technology ) -->

    <!-- Year III Semester II Special Degree table ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIIIsemesterIIspecialcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32223') }} </th>
                        <td> PST 32223 </td>
                        <td> Artificial Neural Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32224') }} </th>
                        <td> PST 32224 </td>
                        <td> Digital Image Processing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32225') }} </th>
                        <td> PST 32225 </td>
                        <td> Data Mining and Practical Machine Learning </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32226') }} </th>
                        <td> PST 32226 </td>
                        <td> Human Computer Interactions </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32227') }} </th>
                        <td> PST 32227 </td>
                        <td> Data Communication and Computer Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32228') }} </th>
                        <td> PST 32228 </td>
                        <td> Computer Graphics & Applications </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32229') }} </th>
                        <td> PST 32229 </td>
                        <td> Mobile Computing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32230') }} </th>
                        <td> PST 32230 </td>
                        <td> Semantic Web </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32231') }} </th>
                        <td> PST 32231 </td>
                        <td> Bioinformatics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32132') }} </th>
                        <td> PST 32132 </td>
                        <td> Current Topics in Computer Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32133') }} </th>
                        <td> PST 32133 </td>
                        <td> Computer Laboratory 3-II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32205') }} </th>
                        <td> PST 32205 </td>
                        <td> Solid State Devices </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32209') }} </th>
                        <td> PST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32210') }} </th>
                        <td> PST 32210 </td>
                        <td> Statistics in Quality Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32212') }} </th>
                        <td> PST 32212 </td>
                        <td> Graph Theory </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 32213') }} </th>
                        <td> PST 32213 </td>
                        <td> Cleaner Production & Green Productivity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II Special Degree table ( Computer Science and Technology ) -->

    <!-- Year IV Semester I Special Degree table ( Applied Physics ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIVsemesterIspecialphysics">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41001') }} </th>
                        <td> PST 41001 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41202') }} </th>
                        <td> PST 41202 </td>
                        <td> Computational Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41203') }} </th>
                        <td> PST 41203 </td>
                        <td> Robotics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41204') }} </th>
                        <td> PST 41204 </td>
                        <td> Remote Sensing & GIS </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41205') }} </th>
                        <td> PST 41205 </td>
                        <td> Geophysics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41206') }} </th>
                        <td> PST 41206 </td>
                        <td> Medical and Bio Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41207') }} </th>
                        <td> PST 41207 </td>
                        <td> Advanced Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41208') }} </th>
                        <td> PST 41208 </td>
                        <td> Data Acquisition and Signal Processing Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41209') }} </th>
                        <td> PST 41209 </td>
                        <td> Advanced Laser Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41210') }} </th>
                        <td> PST 41210 </td>
                        <td> Automation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41211') }} </th>
                        <td> PST 41211 </td>
                        <td> Advanced Astrophysics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41212') }} </th>
                        <td> PST 41212 </td>
                        <td> Electrochemical Power Conversion </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41113') }} </th>
                        <td> PST 41113 </td>
                        <td> Literature Search Seminar in Applied Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41214') }} </th>
                        <td> PST 41214 </td>
                        <td> Independent Research / Project in Applied Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41215') }} </th>
                        <td> PST 41215 </td>
                        <td> Industrial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41116') }} </th>
                        <td> PST 41116 </td>
                        <td> Critical Thinking </td>
                    </tr>        
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I Special Degree table ( Applied Physics ) -->

    <!-- Year IV Semester I Special Degree table ( Chemical Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIVsemesterIspecialchemical">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41001') }} </th>
                        <td> PST 41001 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41217') }} </th>
                        <td> PST 41217 </td>
                        <td> Natural Products Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41218') }} </th>
                        <td> PST 41218 </td>
                        <td> Biotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41219') }} </th>
                        <td> PST 41219 </td>
                        <td> Advanced Solid State Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41120') }} </th>
                        <td> PST 41120 </td>
                        <td> Bioinorganic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41221') }} </th>
                        <td> PST 41221 </td>
                        <td> Instrumental Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41222') }} </th>
                        <td> PST 41222 </td>
                        <td> Applied Molecular Modeling </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41223') }} </th>
                        <td> PST 41223 </td>
                        <td> State of Matter </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41124') }} </th>
                        <td> PST 41124 </td>
                        <td> Literature Search Seminar in Chemical Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41225') }} </th>
                        <td> PST 41225 </td>
                        <td> Independent Research / Project in Chemical Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41226') }} </th>
                        <td> PST 41226 </td>
                        <td> Computer Applications in Instrumentation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41207') }} </th>
                        <td> PST 41207 </td>
                        <td> Advanced Nanotechnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41212') }} </th>
                        <td> PST 41212 </td>
                        <td> Electrochemical power conversion </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41215') }} </th>
                        <td> PST 41215 </td>
                        <td> Industrial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41116') }} </th>
                        <td> PST 41116 </td>
                        <td> Critical Thinking </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I Special Degree table ( Chemical Technology ) -->

    <!-- Year IV Semester I Special Degree table  ( Computer Science and Technology ) -->
    <div role="tabpanel" class="tab-pane" id="PSTyearIVsemesterIspecialcst">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41201') }} </th>
                        <td> PST 41201 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41227') }} </th>
                        <td> PST 41227 </td>
                        <td> High Performance Computing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41228') }} </th>
                        <td> PST 41228 </td>
                        <td> Computer System Security </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41229') }} </th>
                        <td> PST 41229 </td>
                        <td> Advanced Computer Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41230') }} </th>
                        <td> PST 41230 </td>
                        <td> Distributed Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41231') }} </th>
                        <td> PST 41231 </td>
                        <td> Computer Vision </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41232') }} </th>
                        <td> PST 41232 </td>
                        <td> Embedded Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41233') }} </th>
                        <td> PST 41233 </td>
                        <td> Business Process Management Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41234') }} </th>
                        <td> PST 41234 </td>
                        <td> Fuzzy Logic </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41135') }} </th>
                        <td> PST 41135 </td>
                        <td> Literature Search Seminar in Computer Science and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41236') }} </th>
                        <td> PST 41236 </td>
                        <td> Independent Research / Project in Computer  Science and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41203') }} </th>
                        <td> PST 41203 </td>
                        <td> Robotics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41208') }} </th>
                        <td> PST 41208 </td>
                        <td> Data Acquisition and Signal Processing Methods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41210') }} </th>
                        <td> PST 41210 </td>
                        <td> Automation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41215') }} </th>
                        <td> PST 41215 </td>
                        <td> Industrial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PST 41116') }} </th>
                        <td> PST 41116 </td>
                        <td> Critical Thinking </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I Special Degree table ( Computer Science and Technology ) -->

</div>