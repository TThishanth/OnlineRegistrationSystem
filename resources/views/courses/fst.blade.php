<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FSTyearIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#FSTyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FSTyearIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#FSTyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FSTyearIIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#FSTyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FSTyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FSTyearIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11201') }} </th>
                        <td> FST 11201 </td>
                        <td> Introduction to Food Science and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11202') }} </th>
                        <td> FST 11202 </td>
                        <td> Food Biology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11103') }} </th>
                        <td> FST 11103 </td>
                        <td> Food Biology Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11204') }} </th>
                        <td> FST 11204 </td>
                        <td> General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11205') }} </th>
                        <td> FST 11205 </td>
                        <td> Fundamentals of Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11106') }} </th>
                        <td> FST 11106 </td>
                        <td> Elementary Chemistry Laboratory I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11207') }} </th>
                        <td> FST 11207 </td>
                        <td> Computer Fundamentals </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11108') }} </th>
                        <td> FST 11108 </td>
                        <td> Computer Practical 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11209') }} </th>
                        <td> FST 11209 </td>
                        <td> Mathematics for Food Science and  Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 11210') }} </th>
                        <td> FST 11210 </td>
                        <td> Production of Agricultural Raw Materials for better Food Quality </td>
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
    <div role="tabpanel" class="tab-pane" id="FSTyearIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12201') }} </th>
                        <td> FST 12201 </td>
                        <td> Fundamentals of  Microbiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12202') }} </th>
                        <td> FST 12202 </td>
                        <td> Biochemistry  I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12203') }} </th>
                        <td> FST 12203 </td>
                        <td> Postharvest Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12204') }} </th>
                        <td> FST 12204 </td>
                        <td> Postharvest Pest and Disease Control </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12105') }} </th>
                        <td> FST 12105 </td>
                        <td> Postharvest  Handling  of Food Sources  Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12206') }} </th>
                        <td> FST 12206	 </td>
                        <td> Fundamentals of  Statistics and Introduction to statistical software </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12207') }} </th>
                        <td> FST 12207 </td>
                        <td> Analytical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12108') }} </th>
                        <td> FST 12108 </td>
                        <td> Chemistry Practical II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12209') }} </th>
                        <td> FST 12209 </td>
                        <td> Graphic and Web Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 12010') }} </th>
                        <td> FST 12010 </td>
                        <td> Technical /Scientific Writing </td>
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
    <div role="tabpanel" class="tab-pane" id="FSTyearIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21201') }} </th>
                        <td> FST 21201 </td>
                        <td> Biochemistry II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21202') }} </th>
                        <td> FST 21202 </td>
                        <td> Food Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21103') }} </th>
                        <td> FST 21103 </td>
                        <td> Biochemistry  and  Food Chemistry Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21204') }} </th>
                        <td> FST 21204 </td>
                        <td> Principles of Human Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21105') }} </th>
                        <td> FST 21105 </td>
                        <td> Food  Process  Engineering I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21206') }} </th>
                        <td> FST 21206 </td>
                        <td> Food Preservation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21107') }} </th>
                        <td> FST 21107 </td>
                        <td> Food Preservation Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21208') }} </th>
                        <td> FST 21208 </td>
                        <td> Food Microbiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21209') }} </th>
                        <td> FST 21209 </td>
                        <td> Statistics I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 21210') }} </th>
                        <td> FST 21210 </td>
                        <td> Management Process </td>
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
    <div role="tabpanel" class="tab-pane" id="FSTyearIIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22201') }} </th>
                        <td> FST 22201 </td>
                        <td> Biotechnology f or  Food Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22102') }} </th>
                        <td> FST 22102 </td>
                        <td> Microbiology and  Biotechnology Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22203') }} </th>
                        <td> FST 22203 </td>
                        <td> Food  Process Engineering II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22104') }} </th>
                        <td> FST 22104 </td>
                        <td> Food Process Engineering Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22205') }} </th>
                        <td> FST 22205 </td>
                        <td> Food Quality Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22206') }} </th>
                        <td> FST 22206 </td>
                        <td> Livestock  Production and Aquaculture </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22107') }} </th>
                        <td> FST 22107 </td>
                        <td> Livestock  Production and Aquaculture Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22108') }} </th>
                        <td> FST 22108 </td>
                        <td> Food Marketing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 22209') }} </th>
                        <td> FST 22209 </td>
                        <td> Statistics II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 2201') }} </th>
                        <td> CPE 2201 </td>
                        <td> English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FSTyearIIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31201') }} </th>
                        <td> FST 31201 </td>
                        <td> Food Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31102') }} </th>
                        <td> FST 31102 </td>
                        <td> Food  Analysis  Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31203') }} </th>
                        <td> FST 31203 </td>
                        <td> Dairy  Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31204') }} </th>
                        <td> FST 31204 </td>
                        <td> Food  Packaging </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31205') }} </th>
                        <td> FST 31205 </td>
                        <td> Applied Human Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31106') }} </th>
                        <td> FST 31106 </td>
                        <td> Human Nutrition Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31107') }} </th>
                        <td> FST 31107 </td>
                        <td> Food Regulations </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31208') }} </th>
                        <td> FST 31208 </td>
                        <td> Food Safety and Risk Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31209') }} </th>
                        <td> FST 31209 </td>
                        <td> Food Industries and Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 31210') }} </th>
                        <td> FST 31210 </td>
                        <td> Research Methodology  and  Scientific Communication </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="FSTyearIIIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32201') }} </th>
                        <td> FST 32201 </td>
                        <td> Aquatic Food Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32202') }} </th>
                        <td> FST 32202 </td>
                        <td> Dairy Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32103') }} </th>
                        <td> FST 32103 </td>
                        <td> Dairy Science and Dairy Processing Technology Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32204') }} </th>
                        <td> FST 32204 </td>
                        <td> Sugar and Confectionery Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32105') }} </th>
                        <td> FST 32105 </td>
                        <td> Beverage Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32106') }} </th>
                        <td> FST 32106 </td>
                        <td> Sensory Evaluation of Foods </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32107') }} </th>
                        <td> FST 32107 </td>
                        <td> Sensory Evaluation of Foods Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32108') }} </th>
                        <td> FST 32108 </td>
                        <td> Process  Control   and Automation in Food Industry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32209') }} </th>
                        <td> FST 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32210') }} </th>
                        <td> FST 32210 </td>
                        <td> Cleaner Production  and Green Productivity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'FST 32111') }} </th>
                        <td> FST 32111 </td>
                        <td> Food Science and Technology Seminars </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FSTyearIVsemesterI">
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
                        <td> FST 41201 </td>
                        <td> Integrated  Project  in Food Science  and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42254') }} </th>
                        <td> FST 41102 </td>
                        <td> Root Crops Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42255') }} </th>
                        <td> FST 41103 </td>
                        <td> Spice Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42256') }} </th>
                        <td> FST 41104 </td>
                        <td> Grain Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42257') }} </th>
                        <td> FST 41105 </td>
                        <td> Fruit and Vegetable Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42258') }} </th>
                        <td> FST 41106 </td>
                        <td> Edible Oil  Processing  Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42259') }} </th>
                        <td> FST 41107 </td>
                        <td> Food Processing  Technology Practical (Cereals/Grains,Spices,Root crops, Tubers and Confectionery) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42260') }} </th>
                        <td> FST 41208 </td>
                        <td> Meat and Egg Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42261') }} </th>
                        <td> FST 41109 </td>
                        <td> Meat, Egg and Aquatic Food Processing Technology  Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42262') }} </th>
                        <td> FST 41210 </td>
                        <td> Advanced Food Quality Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'IS 42262') }} </th>
                        <td> FST 41111 </td>
                        <td> Functional Foods and Nutraceuticals </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>