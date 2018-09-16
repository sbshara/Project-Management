@extends('layouts.adminLTE.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Project Management <small>By Shiblie Bshara</small></h1>
        @include('layouts.adminLTE.breadCrumb')
        <small class="pull-right">Last Updated: Sep 2018</small>
    </section>
<!-- Main content -->
    <section class="content container-fluid">
        <!-- ISO Standards -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header"><mark>ISO/IEC/IEEE 12207:2017</mark> <small>Systems and software engineering – Software life cycle processes</small></h2>
                <p>This software is complient with <a target="_blank" href="https://www.iso.org/standard/63712.html">ISO/IEC 12207:2017</a>, and utilizes the IEEE Software Lifecycle standards:
                    <ul>
                        <li>
                            <b>SQA </b>– Software quality assurance
                            <a target="_blank" href="https://standards.ieee.org/standard/730-2014.html">
                                IEEE 730 (2014) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>SCM </b>– Software configuration management
                            <a target="_blank" href="https://standards.ieee.org/standard/828-2012.html">
                                IEEE 828 (2012) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>STD </b>– Software test documentation
                            <a target="_blank" href="https://standards.ieee.org/standard/829-1998.html">
                                IEEE 829 (1998) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>SRS </b>– Software requirements specification
                            <a target="_blank" href="https://standards.ieee.org/standard/830-1998.html">
                                IEEE 830 (1998) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>V&V </b>– Software verification and validation
                            <a target="_blank" href="https://standards.ieee.org/standard/1012-2012.html">
                                IEEE 1012 (2012) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>SDD </b>– Software design description
                            <a target="_blank" href="https://standards.ieee.org/standard/1016-2009.html">
                                IEEE 1016 (2009) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>SPM </b>– Software project management
                            <a target="_blank" href="https://standards.ieee.org/standard/1058-1998.html">
                                IEEE 1058 (1998) <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                        <li>
                            <b>SUD </b>– Software user documentation
                            <a target="_blank" href="https://standards.ieee.org/standard/1063-2001.html">
                                IEEE 1063 (2001)<i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <!-- /.ISO Standards -->
<hr/>
        <!-- Technical Management Processes -->
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2 class="page-header"><mark>TMP</mark> <small>Technical Management Processes</small></h2>
                    <p>ISO/IEC/IEEE 12207:2017 places eight different processes here:
                    <ul>
                        <li>Project planning</li>
                        <li>Project assessment and control</li>
                        <li>Decision management</li>
                        <li>Risk management</li>
                        <li>Configuration management</li>
                        <li>Information management</li>
                        <li>Measurement</li>
                        <li>Quality assurance</li>
                    </ul>
                    <section>These processes deal with planning, assessment, and control of software and other projects during the life cycle, ensuring quality along the way.</section>
                    </p>
            </div>
        <!-- /.Technical Management Processes -->
        <!-- Technical Processes -->
            <div class="col-xs-12 col-sm-6">
                <h2 class="page-header"><mark>TP</mark> <small>Technical Processes</small></h2>
                <p>The technical processes of ISO/IEC/IEEE 12207:2017 encompass 14 different processes, some of which came from the old software-specific processes that were phased out from the 2008 version.
                The full list includes:
                <ul>
                    <li>Business or mission analysis</li>
                    <li>Stakeholder needs and requirements definition</li>
                    <li>Systems/Software requirements definition</li>
                    <li>Architecture definition</li>
                    <li>Design definition</li>
                    <li>System analysis</li>
                    <li>Implementation</li>
                    <li>Integration</li>
                    <li>Verification</li>
                    <li>Transition</li>
                    <li>Validation</li>
                    <li>Operation</li>
                    <li>Maintenance</li>
                    <li>Disposal</li>
                </ul>
            </div>
            <section class="col-xs-12">These processes involve technical activities and personnel (information technology, troubleshooters, software specialists, etc.) during pre-, post- and during operation. The analysis and definition processes early on set the stage for how software and projects are implemented. Additional processes of integration, verification, transition, and validation help ensure quality and readiness. The operation and maintenance phases occur simultaneously, with the operation phase consisting of activities like assisting users in working with the implemented software product, and the maintenance phase consisting of maintenance tasks to keep the product up and running. The disposal process describes how the system/project will be retired and cleaned up, if necessary.</section>
        </div>
        <!-- /.Technical Processes -->
        <hr/>
        <!-- Features & Values -->
        <div class="row">
            <div class="col-sm-6">
                <h2 class="page-header"><mark>Features</mark><small> Top features & added values gained by using this application:</small>
                </h2>
                <ul>
                    <li>Employee Management</li>
                    <li>Ticketing System</li>
                    <li>Products & Inventory</li>
                    <li>Supports Collaboration & helps improve team work efficiency</li>
                    <li>Ready for integrations</li>
                    <li>Employee Self-Service</li>
                    <li>Provides Reporting & Analytics interface</li>
                    <li>Easy to install, few steps for deployment</li>
                    <li>LDAP compatible, easily connected to your existing server</li>
                    <li>Conformed to OWASP Top 10 security threats</li>
                </ul>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <h2 class="page-header"><mark>Technologies & Resources</mark><small> This application was built using multiple libraries available for the public using MIT licenses.  Majors are listed below:</small>
                </h2>
                <ul>
                    <li>Laravel Framework v5.6.*</li>
                    <li>Symfony various components</li>
                    <li>AdminLTE v2.4</li>
                    <li><a href="http://php.net/">PHP 7.2.8 with Zend Engine</a></li>
                    <li><a href="https://dev.mysql.com/downloads/">MySQL Database 8.0.12 (MySQL Community Server - GPL)</a></li>
                    <li><a href="https://getcomposer.org/">Composer</a></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.Features & Values -->
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">Additional details<br>
                    <small>This application was built and tested according to best practices and standards known as of Aug 2018.  This includes the use and the application of the following:</small></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h4>Versioning <small> This application is versioned under the <a href="https://semver.org/">Semantic Versioning</a> guidelines as much as possible.</small></h4>
                <p>Releases will be numbered with the following format:<br><code>< major >.< minor >.< patch ></code><br>And constructed with the following guidelines:
                    <ul>
                        <li>Breaking backward compatibility bumps the major and resets the minor and patch.</li>
                        <li>New additions without breaking backward compatibility bumps the minor and resets the patch.</li>
                        <li>Bug fixes and misc changes bumps the patch.</li>
                            <i>* Minor versions are not maintained individually, and you're encouraged to upgrade through to the next minor version.</i><br>
                            <i>* The key words “MUST”, “MUST NOT”, “REQUIRED”, “SHALL”, “SHALL NOT”, “SHOULD”, “SHOULD NOT”, “RECOMMENDED”, “MAY”, and “OPTIONAL” in versioning definitions are to be interpreted as described in <a href="https://tools.ietf.org/html/rfc2119">RFC2119</a> document.</i>
                    </ul>
                </p>
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
@endsection
