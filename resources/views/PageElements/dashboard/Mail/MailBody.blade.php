@extends('PageElements.dashboard.Mail.Shared.MailSectionTemplate')

@section('MailContents')
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $MailboxName }}</h3>

                <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="mailbox-read-info">
                    <h3>موضوع</h3>
                    <h5>از: help@example.com
                        <span class="mailbox-read-time pull-left">۳ مرداد ۱۳۹۶ ساعت ۱۴:۳۲</span>
                    </h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                            <i class="fa fa-trash-o"></i></button>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                            <i class="fa fa-reply"></i></button>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                            <i class="fa fa-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                        <i class="fa fa-print"></i></button>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                    @php
                        print_r($MailBody[0]);
                    @endphp
                </div>
                <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <ul class="mailbox-attachments clearfix">
                    @dd($MailBody)
                    @foreach ($MailBody[1] as $attachment)
                        @if ($attachment['is_attachment'])
                            <li>
                                <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                                <div class="mailbox-attachment-info">
                                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> {{ $attachment['name'] }}</a>
                                    <span class="mailbox-attachment-size">
                                        1,245 KB
                                        <a href="#" class="btn btn-default btn-xs pull-left"><i class="fa fa-cloud-download"></i></a>
                                    </span>
                                </div>
                            </li>
                        @endif
                    @endforeach
                    {{-- <li>
                        <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                            <span class="mailbox-attachment-size">
                                1,245 KB
                                <a href="#" class="btn btn-default btn-xs pull-left"><i class="fa fa-cloud-download"></i></a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App Description.docx</a>
                            <span class="mailbox-attachment-size">
                                1,245 KB
                                <a href="#" class="btn btn-default btn-xs pull-left"><i class="fa fa-cloud-download"></i></a>
                            </span>
                        </div>
                    </li> --}}
                    {{-- <li>
                        <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png" alt="Attachment"></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                            <span class="mailbox-attachment-size">
                                2.67 MB
                                <a href="#" class="btn btn-default btn-xs pull-left"><i class="fa fa-cloud-download"></i></a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png" alt="Attachment"></span>

                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                            <span class="mailbox-attachment-size">
                                1.9 MB
                                <a href="#" class="btn btn-default btn-xs pull-left"><i class="fa fa-cloud-download"></i></a>
                            </span>
                        </div>
                    </li> --}}
                </ul>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
                <div class="pull-right">
                    <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> پاسخ دادن</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-share"></i> فوروارد</button>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> حذف</button>
                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> پرینت</button>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /. box -->
    </div>
@endsection
