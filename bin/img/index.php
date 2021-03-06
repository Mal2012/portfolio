<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Demo 9.1.0
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Upload Manager</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>

<div class="container">
    <br>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-ext IoNmn int
	 \ U s e r s \ M a l c o l m \ D e s k t o p \ A S C O \ h e t z n e r \ m o o d l e - l a t e s t - 2 7 \ m o o d l e \ l i b \ t c p d f \ f o n t s \ f r e e m o n o . z : Z o n e . I d e n t i f i e r   i f i e r     \ l o c s \ a v p u i . i n i   priv static funct����������KLsixtRotati        ���Ҡ~��||��   0) FIcsurn $tex        P1
����`ޜ ����������        (ܜ �����ޜ ������q
����                             ������@�����        `I�����@�����        `�����   �3�              Ntfsint
	 */�@ Μ �����Μ ����                      �͜ ����̜ ����̜ ����        0	����������@	����@	����	�����!�����(                                         �          @2����        �C� ����        ��������                                                                                0�����              ������͜ ����                        �������������<�����<����                �                                                ����� �����                 NtFs��j	����Z o n e . I d e n t i f i e r   IoNmON_PROTE\ U s e r s \ M a l c o l m \ D e s k t o p \ A S C O \ h e t z n e r \ m o o d l e - l a t e s t - 2 7 \ m o o d l e \ l i b \ p h p m a i l e r \ l a n g u a g e \ p h p m a i l e r . l a n g - b r . p h p : Z o n e . I d e n t i f i e r   i f i e r      Ntfsdify it �@ Ԙ �����Ԙ ����                      �Ә ����X=� ����X=� ����        `\ ����������p[ ����p[ ����@[ �����!�����(                                         �          0�����        �� ����        ��������                                                                                p�����             @������Ә ����                        �������������#�����#����                �                                               @�����@�����                  Sec�ublic
 *	FSim�j	�����   �F~        : x     �v����       �      �      8�3����8�3����                               �        Ϯ"������     	NtFs*
 * @cap�����`m����������        #�    @+����MmSms \ M a  �� ����@                                     
Sec�o o d l �   �       s t         m o o d                        ! l \                  2����          ����        �>@ ���y�����       ��  ���
FIcse r         P1
������ ����H�����        ؍� ����`�� ������q
����                             �B�����9����        `I������0����        �����   �3o�             MmSm �� ����@                                     IoNm\ U s e r s \ M a l c o l m \ D e s k t o p \ A S C O \ h e t z n e r \ m o o d l e - l a t e s t - 2 7 \ m o o d l e \ l i b \ p h p u n i t \ t e s t s \ b a s i c _ t e s t . p h p : Z o n e . I d e n t i f i e r   i f i e r     MNtff(H
  J�                   ����������p�����p�����        � �����!����� E� ����F� �����M����  :�ʡ��t�����M����                            �M����Ў����                                                �      0� J                     �/ ����                                  �@`E� ����F� ����                    (E� ����������������        `������������    �    @������!�����0                                          �                           �E� ����               `�����        ������        ������@�����              �����        p�����                                                     ������������������������                �                                               @�����@�����                  x �         � �     c�����       �      �      ������h�����                               �       p]� ����� (   �^ ����������������        @�����`�����`����� "     ������(_ ����������         "     ������                        ������������H�                    ������        ��    x�����        
D o m P D F . p h p               D O M P D F . P H P                  MNtff(H
  o�                   �G�����G����p�D����p�D����        �`�����!������P�����P�����S�)�� ���ʡ�#��)���S�)��       �                    �S�)��Ў����                                                �      �;L                     �/ ����                                  �@�P�����P����       �      �      �P����xG����xG����        0G�����G�����    �    G�����!�����0                                          �                           HP����                0G����        ������        pG����G����             `������        @G����                                                    �G�����G�����G�����G����                �                                               G����G����                  x �         � �     �G�����       �      �      ������8G����                               �       ��x����� (   ��F����*G����������        G����0G����0G����> >     ��B������F����X*G����        > >     ��B����                        ������������            (  ���                   C�	    `�B����                                                                                M o l m \ D e NtFs��j	����Z o n e . I d e n t i f i e r   Ntfot e s t \ U s e r s \ M a l c o l m \ D e s k t o p \ A S C O \ h e t z n e r \ m o o d l e - l a t e s t - 2 6 \ m o o d l e \ e n r o l \ m a n u a l \ y u i \ q u i c k e n r o l m e n t \ a s s e t s         FIcs        P1
�����jv����G����        ��v����@kv������q
����                             ��G����p\E����        `I�������G����        `�G����   $30	             IoNm\ U s e r s \ M a l c o l m \ D e s k t o p \ A S C O \ h e t z n e r \ m o o d l e - l a t e s t - 2 6 \ m o o d l e \ e n r o l \ b u l k c h a n g e _ f o r m s . p h p : Z o n e . I d e n t i f i e r   i f i e r     d e n t i f i e r   r e   i e r   IoNm\ U s e r s \ M a l c o l m \ D e s k t o p \ A S C O \ h e t z n e r \ m o o d l e - l a t e s t 