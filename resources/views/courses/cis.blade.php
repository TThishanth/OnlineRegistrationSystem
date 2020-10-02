<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#CISyearIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#CISyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#CISyearIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#CISyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#CISyearIIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#CISyearIVsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#CISyearIVsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
        
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="CISyearIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 11201') }} </th>
                        <td> IS 11201 </td>
                        <td> Fundamentals of Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 11302') }} </th>
                        <td> IS 11302 </td>
                        <td> Structured Programming Techniques </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 11203') }} </th>
                        <td> IS 11203 </td>
                        <td> Information Systems Theory and Practice </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 11204') }} </th>
                        <td> IS 11204 </td>
                        <td> Information System Infrastructure </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 11205') }} </th>
                        <td> IS 11205 </td>
                        <td> Fundamentals of Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 11206') }} </th>
                        <td> IS 11206 </td>
                        <td> Statistics and Probability Theory </td>
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
    <div role="tabpanel" class="tab-pane" id="CISyearIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 12307') }} </th>
                        <td> IS 12307 </td>
                        <td> Object Oriented Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 12308') }} </th>
                        <td> IS 12308 </td>
                        <td> Database Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 12209') }} </th>
                        <td> IS 12209 </td>
                        <td> Emerging Technologies for Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 12210') }} </th>
                        <td> IS 12210 </td>
                        <td> Advanced Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 12311') }} </th>
                        <td> IS 12311 </td>
                        <td> Analysis of Algorithms </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 12212') }} </th>
                        <td> IS 12212 </td>
                        <td> Human Computer Interaction </td>
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
    <div role="tabpanel" class="tab-pane" id="CISyearIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21213') }} </th>
                        <td> IS 21213 </td>
                        <td> Personal Productivity with IS technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21214') }} </th>
                        <td> IS 21214 </td>
                        <td> Software Project Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21215') }} </th>
                        <td> IS 21215 </td>
                        <td> Object Oriented Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21216') }} </th>
                        <td> IS 21216 </td>
                        <td> Platform Technologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21217') }} </th>
                        <td> IS 21217 </td>
                        <td> System Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21218') }} </th>
                        <td> IS 21218 </td>
                        <td> Information Assurance and Security </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 21219') }} </th>
                        <td> IS 21219 </td>
                        <td> Social and Professional Issues </td>
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
    <div role="tabpanel" class="tab-pane" id="CISyearIIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22220') }} </th>
                        <td> IS 22220 </td>
                        <td> System Administration and Maintenance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22221') }} </th>
                        <td> IS 22221 </td>
                        <td> Operating System Concepts </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22222') }} </th>
                        <td> IS 22222 </td>
                        <td> System Integration and Architecture </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22223') }} </th>
                        <td> IS 22223 </td>
                        <td> IS Risk Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22224') }} </th>
                        <td> IS 22224 </td>
                        <td> IT Governance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22225') }} </th>
                        <td> IS 22225 </td>
                        <td> Business Intelligence </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 22226') }} </th>
                        <td> IS 22226 </td>
                        <td> Web Technologies </td>
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

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="CISyearIIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31227') }} </th>
                        <td> IS 31227 </td>
                        <td> Rapid Application Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31228') }} </th>
                        <td> IS 31228 </td>
                        <td> Electronic Business Strategy, Architecture and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31129') }} </th>
                        <td> IS 31129 </td>
                        <td> Enterprise Architecture </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31231') }} </th>
                        <td> IS 31231 </td>
                        <td> Management Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31232') }} </th>
                        <td> IS 31232 </td>
                        <td> IT Auditing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31233') }} </th>
                        <td> IS 31233 </td>
                        <td> Entrepreneurship and Innovation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31234') }} </th>
                        <td> IS 31234 </td>
                        <td> Software Engineering </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31235') }} </th>
                        <td> IS 31235 </td>
                        <td> Data Communication and Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31236') }} </th>
                        <td> IS 31236 </td>
                        <td> Geographical Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31237') }} </th>
                        <td> IS 31237 </td>
                        <td> Advanced Database Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31238') }} </th>
                        <td> IS 31238 </td>
                        <td> Organizational Behavior and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31239') }} </th>
                        <td> IS 31239 </td>
                        <td> Agile Software Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31240') }} </th>
                        <td> IS 31240 </td>
                        <td> Software Quality Assurance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 31241') }} </th>
                        <td> IS 31241 </td>
                        <td> Design Patterns and Applications </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="CISyearIVsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41243') }} </th>
                        <td> IS 41243 </td>
                        <td> Introduction to Distributed Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41244') }} </th>
                        <td> IS 41244 </td>
                        <td> Information Systems Strategies, Management and Acquisition </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41245') }} </th>
                        <td> IS 41245 </td>
                        <td> Business Process Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41246') }} </th>
                        <td> IS 41246 </td>
                        <td> Enterprise Resource Planning </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41247') }} </th>
                        <td> IS 41247 </td>
                        <td> Research Method </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41248') }} </th>
                        <td> IS 41248 </td>
                        <td> Cloud Computing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41249') }} </th>
                        <td> IS 41249 </td>
                        <td> Logistics Systems and Transportation Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41250') }} </th>
                        <td> IS 41250 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41251') }} </th>
                        <td> IS 41251 </td>
                        <td> Data Mining and Applications </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 41252') }} </th>
                        <td> IS 41252 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

    <!-- Year IV Semester II table -->
    <div role="tabpanel" class="tab-pane" id="CISyearIVsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42853') }} </th>
                        <td> IS 42853 </td>
                        <td> Research Project in Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42254') }} </th>
                        <td> IS 42254 </td>
                        <td> Business/IT Alignment </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42255') }} </th>
                        <td> IS 42255 </td>
                        <td> Business Process Simulation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42256') }} </th>
                        <td> IS 42256 </td>
                        <td> Information System Economics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42257') }} </th>
                        <td> IS 42257 </td>
                        <td> Enterprise Modeling Ontologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42258') }} </th>
                        <td> IS 42258 </td>
                        <td> Enterprise Architecture Framework </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42259') }} </th>
                        <td> IS 42259 </td>
                        <td> Web Service Technologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42260') }} </th>
                        <td> IS 42260 </td>
                        <td> Software Architecture </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42261') }} </th>
                        <td> IS 42261 </td>
                        <td> Computer System Security </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42262') }} </th>
                        <td> IS 42262 </td>
                        <td> Mobile Computing </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II table -->

</div>