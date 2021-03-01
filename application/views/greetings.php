<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   $this->load->view('inc/header'); 
   if(!$this->session->userdata('permissions') && $this->session->userdata('permissions')=='' ) {
   ?>
<style type="text/css">
   .alrtMsg{
   padding-top: 50px;
   }
   .alrtMsg i {
   font-size: 60px;
   color: #f1c836;
   }
</style>
  <div class="container">
    <div class="row">
        <div class="text-center alrtMsg">
          <i class="fa fa-exclamation-triangle">
          </i>
          <h3>You Do Not have permission as of now. Please contact your Administration and Request for Permission.
          </h3>
        </div>
    </div>
  </div>
  <?php
    }
    ?>
    <style>
    /* @media (min-width: 769px){
      .inner-content {
         margin-bottom: 55px;
         margin-top: -30px;
      }
    } */

      td,
      th {
      /* border: 1px solid #dddddd; */
      text-align: left;
      padding: 8px;
      }
      .table td,
      .table>tbody>tr>td,
      .table>tbody>tr>th,
      .table>tfoot>tr>td,
      .table>tfoot>tr>th,
      .table>thead>tr>td,
      .table>thead>tr>th {
      font-size: 14px;
      }
      tr:nth-child(even) {
      background-color: #f9f9f9;
      }
      .content section {
      font-size: 1.25em;
      padding: 1em 1em;
      }
      .tabs nav ul li {
      font-size: 12px;
      }
      .content section {
      font-size: 1.25em;
      padding: 1em 0em;
      }
      .table>thead>tr>th {
      background: #95b85c;
      color: white !important;
      }
      .header-section {
      height: 40px;
      }
      li.dropdown.note a {
      padding: 0.4em 2em;
      display: block;
      border: none;
      }
      .outter-wp {
      padding: .2em .2em;
      }
      .pull-right {
      float: right;
      }
      .pull-left {
      float: left;
      }
      #fbcomment {
      background: #fff;
      border: 1px solid #dddfe2;
      border-radius: 3px;
      color: #4b4f56;
      padding: 50px;
      }
      .header_comment {
      font-size: 14px;
      overflow: hidden;
      border-bottom: 1px solid #e9ebee;
      line-height: 25px;
      margin-bottom: 24px;
      padding: 10px 0;
      }
      .sort_title {
      color: #4b4f56;
      }
      .sort_by {
      background-color: #f5f6f7;
      color: #4b4f56;
      line-height: 22px;
      cursor: pointer;
      vertical-align: top;
      font-size: 12px;
      font-weight: bold;
      vertical-align: middle;
      padding: 4px;
      justify-content: center;
      border-radius: 2px;
      border: 1px solid #ccd0d5;
      }
      .count_comment {
      font-weight: 600;
      }
      .body_comment {
      padding: 0 25px;
      font-size: 14px;
      display: block;
      line-height: 25px;
      word-break: break-word;
      }
      .avatar_comment {
      display: block;
      }
      .avatar_comment img {
      height: 48px;
      width: 48px;
      float: right;
      border-radius: 100px;
      }
      .box_comment {
      display: block;
      position: relative;
      line-height: 1.358;
      word-break: break-word;
      border: 1px solid #d3d6db;
      word-wrap: break-word;
      background: #fff;
      box-sizing: border-box;
      cursor: text;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 16px;
      padding: 0;
      }
      .box_comment textarea {
      min-height: 40px;
      padding: 12px 8px;
      width: 100%;
      border: none;
      resize: none;
      }
      .box_comment textarea:focus {
      outline: none !important;
      }
      .box_comment .box_post {
      border-top: 1px solid #d3d6db;
      background: #f5f6f7;
      padding: 8px;
      display: block;
      overflow: hidden;
      }
      .box_comment label {
      display: inline-block;
      vertical-align: middle;
      font-size: 11px;
      color: #90949c;
      line-height: 22px;
      }
      .box_comment button {
      margin-left: 8px;
      background-color: #4267b2;
      border: 1px solid #4267b2;
      color: #fff;
      text-decoration: none;
      line-height: 22px;
      border-radius: 2px;
      font-size: 14px;
      font-weight: bold;
      position: relative;
      text-align: center;
      }
      .box_comment button:hover {
      background-color: #29487d;
      border-color: #29487d;
      }
      .box_comment .cancel {
      margin-left: 8px;
      background-color: #f5f6f7;
      color: #4b4f56;
      text-decoration: none;
      line-height: 22px;
      border-radius: 2px;
      font-size: 14px;
      font-weight: bold;
      position: relative;
      text-align: center;
      border-color: #ccd0d5;
      }
      .box_comment .cancel:hover {
      background-color: #d0d0d0;
      border-color: #ccd0d5;
      }
      .box_comment img {
      height: 16px;
      width: 16px;
      }
      .box_result {
      margin-top: 24px;
      list-style: none;
      }
      .box_result .result_comment h4 {
      font-weight: 600;
      white-space: nowrap;
      color: #365899;
      cursor: pointer;
      text-decoration: none;
      font-size: 14px;
      line-height: 1.358;
      margin: 0;
      text-align: initial;
      }
      .box_result .result_comment {
      display: block;
      overflow: hidden;
      padding: 0;
      }
      .child_replay {
      border-left: 1px dotted #d3d6db;
      margin-top: 12px;
      list-style: none;
      padding: 0 0 0 8px
      }
      .reply_comment {
      margin: 12px 0;
      }
      .box_result .result_comment p {
      margin: 4px 0;
      text-align: justify;
      }
      .box_result .result_comment .tools_comment {
      font-size: 12px;
      line-height: 1.358;
      text-align: initial;
      }
      .box_result .result_comment .tools_comment a {
      color: #4267b2;
      cursor: pointer;
      text-decoration: none;
      }
      .box_result .result_comment .tools_comment span {
      color: #90949c;
      }
      .body_comment .show_more {
      background: #3578e5;
      border: none;
      box-sizing: border-box;
      color: #fff;
      font-size: 14px;
      margin-top: 24px;
      padding: 12px;
      text-shadow: none;
      width: 100%;
      font-weight: bold;
      position: relative;
      text-align: center;
      vertical-align: middle;
      border-radius: 2px;
      }
    </style>
<body>
   <div class="se-pre-con">
   </div>
   <div class="page-container" style="height: 1000px;">
      <!--/content-inner-->
      <div class="left-content">
         <div class="inner-content">
            <!-- header-starts -->
            <div class="header-section">
               <!--menu-right-->
               <div class="top_menu">
                  <!--/profile_details-->
                  <div class="profile_details_left">
                     <?php $this->load->view('notification');?>
                  </div>
                  <div class="clearfix">
                  </div>
                  <!--//profile_details-->
               </div>
               <!--//menu-right-->
               <div class="clearfix">
               </div>
            </div>
            <!-- //header-ends -->
            <div class="outter-wp">
               <!--custom-widgets-->
               <style>
                  @media screen and (min-width: 768px) {
                  modal_
                  .modal-dialog  {
                  width:900px;
                  }
                  }
                  .form-group input[type="checkbox"] {
                  display: none;
                  }
                  .form-group input[type="checkbox"] + .btn-group > label span {
                  width: 20px;
                  }
                  .form-group input[type="checkbox"] + .btn-group > label span:first-child {
                  display: none;
                  }
                  .form-group input[type="checkbox"] + .btn-group > label span:last-child {
                  display: inline-block;
                  }
                  .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
                  display: inline-block;
                  }
                  .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
                  display: none;
                  }
                  tr.highlight_past td.due_date{
                  background-color: #cc6666 !important;
                  }
                  tr.highlight_now td.due_date{
                  background-color: #e4b13e !important;
                  }
                  tr.highlight_future td.due_date{
                  background-color: #65dc68 !important;
                  }
                  #history_table td {
                  border: 1px solid #aaa;
                  padding: 5px
                  }
               </style>
                 <?php 
                  //print_r($greeting);die;
                  if(count($greeting)>0)
                  {
                  foreach ($greeting as $g) {
                  if($g->type=='dob')
                  {
                  ?>
                <div class="container" style="  margin-left: 0px;">
                  <div class="row">
                     <div class="col-lg-11">
                        <div class="birthday-card ">
                           <div class="birthday">
                              <div class="wrapper">
                                 <div class="text1">
                                    <h1>Team Olive Homes Wishes  
                                       <?=$g->username;?> A Happy birthday!
                                    </h1>
                                    <h2 class="mt-30">We wish you good luck, peace, prosperity and success in every dimension of your life and career.
                                    </h2>
                                    <h2 class="quote">Hope your Special Day
                                    </h2>
                                    <h2 class="quote">Bring bring you all that your Heart Desires
                                    </h2>
                                    <h2 class="quote">Wishing you a day of Pleasent Surprises
                                    </h2>
                                    <h2 class="quote">Dear "Client Name"
                                    </h2>
                                 </div>
                                 <div id="scene">
                                    <div class="bgcover">
                                       <div class="ballon">
                                       </div>
                                       <div class="ballon">
                                       </div>
                                       <div class="ballon">
                                       </div>
                                       <div class="ballon">
                                       </div>
                                       <div class="ballon">
                                       </div>
                                       <div class="ballon">
                                       </div>
                                    </div>
                                    <div class="cake">
                                       <div class="candle">
                                          <div class="candle-1">
                                             <div class="wax">
                                             </div>
                                             <div class="flame">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="strip">
                                       </div>
                                       <div class="strip next">
                                       </div>
                                    </div>
                                    <div class="platform">
                                       <div class="strip">
                                       </div>
                                       <div class="strip next">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"> 
                              </div>
                           </div>
                           <div class="ex1">
                              <div class="container1">
                                 <div class="fbcomment" id="">
                                    <div class="data-icons-complete">
                                       <?php
                                          $likes = $this->greeting_model->countWhere(array("g_id"=>$g->id,"liked!="=>0),"greetingcomments"); 
                                          $commentsCount = $this->greeting_model->countWhere(array("g_id"=>$g->id,"comment!="=>''),"greetingcomments"); 
                                          $no_data = $this->greeting_model->getWhere(array('g_id'=>$g->id,'user_id'=>$this->session->userdata('user_id'),"liked"=>1),'greetingcomments'); 
                                          ?>
                                       <div style="float: left;">
                                          <i id="likeIcon<?=$g->id?>" style="cursor:pointer;<?=(count($no_data)>0?'color: rgb(11, 11, 232)':'')?>"  onclick="likecount('<?=$g->id?>');" class="fa fa-thumbs-up" aria-hidden="true">
                                          <a id="likecount<?=$g->id?>" class="<?=(count($no_data)>0?'active':'')?>">
                                          <?=($likes>0?$likes:'0')?>
                                          </a>
                                          </i> 
                                       </div>
                                       <div style="float: right;">
                                          <i onclick="togglediv('<?=$g->id?>')" style="cursor:pointer" class="fa fa-comments" aria-hidden="true">
                                          <a  id="commentCount<?=$g->id?>">
                                          <?=($commentsCount>0?$commentsCount:'0')?>Comments
                                          </a>
                                          </i> 
                                       </div>
                                    </div>
                                    <br>
                                    <div class="clearfix">
                                    </div>
                                    <br>
                                    <div class="body_comment toggle_div<?=$g->id?> hidden">
                                       <div class="row">
                                          <div class="avatar_comment col-md-1">
                                             <img src="<?=base_url('uploads/'.$this->session->userdata('profile_pic'));?>" alt="avatar"/>
                                             <!-- <span>
                                             <?=$this->session->userdata('user_name');?>
                                             </span> -->
                                          </div>
                                          <div class="box_comment col-md-11">
                                             <textarea class="commentar" id="wishes<?=$g->id?>" placeholder="Add a comment..."></textarea>
                                             <div class="box_post">
                                                <div class="pull-right"> 
                                                   <button onclick="submit_comment('<?=$this->session->userdata("user_id")?>','<?=$g->user_id?>','<?=$g->id?>');" type="button" value="1">Post
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <ul id="list_comment<?=$g->id?>" class="col-md-12">
                                             <!-- Start List Comment 2 -->
                                             <?php 
                                                $comment = $this->greeting_model->prevComments($g->id);
                                                if(count($comment)>0)
                                                {
                                                foreach ($comment as $comment) {
                                                if($comment->comment!='')
                                                {
                                                ?>
                                             <li class="box_result row prev_wishes" >
                                                <div class="avatar_comment col-md-1">
                                                   <img src="<?=base_url('uploads/'.$comment->user_profile_pic)?>" alt="avatar"/>
                                                </div>
                                                <div class="result_comment col-md-11">
                                                   <h4 class="test">
                                                      <?=$comment->f_name." ".$comment->l_name;?>
                                                   </h4>
                                                   <p>
                                                      <?=$comment->comment;?>
                                                   </p>
                                                   <div class="tools_comment"> 
                                                      <span aria-hidden="true"> · 
                                                      </span>
                                                      <span>
                                                      <?=time_since(strtotime(date("Y-m-d H:i:s"))-strtotime($comment->date_added));?> ago
                                                      </span>
                                                   </div>
                                                   <ul class="child_replay">
                                                   </ul>
                                                </div>
                                             </li>
                                             <?php
                                                }
                                                }
                                                }
                                                ?>
                                          </ul>
                                          <!-- <button class="btn-success show" onclick="showFunction()"> Show More
                                             </button>
                                             <button class="btn-success hide" onclick="hideFunction()"> Hide
                                             </button>
                                              <button class="show_more" type="button">Load 10 more comments</button> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Post
                        </button>
                     </div>
                     <div class="modal wishes" id="exampleModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;
                                 </span>
                                 </button>
                                 <h5 class="modal-title">what's on your mind, <?=$this->session->userdata("user_name");?>?
                                 </h5>
                              </div>
                              <div class="modal-body">
                                 <form action="<?=base_url("GreetingsController/userPost");?>" method="post" enctype="multipart/form-data" >
                                    <label for="subj">Subject
                                    </label>
                                    <input type="text" id="sub" name="p_subject" placeholder="Subject..">
                                    <label for="subj">File
                                    </label>
                                    <input type="file" id="myFile" name="p_file">
                                    <label for="subject">Description
                                    </label>
                                    <textarea id="desc" name="p_desc" placeholder="Your Description.." style="height:100px"></textarea>
                                    <center>
                                       <input type="submit" value="Submit">
                                    </center>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
                  <?php
                     }
                     elseif($g->type=="closure")
                     {
                     $close_callback = $this->callback_model->get_callback_details($g->callback_id);
                     // echo $close_callback->id;
                     //print_r($close_callback);
                     ?>
                  <div class="congratulations">
                     <div class="container text-center">
                        <div class="row text-center">
                           <div class="col-sm-6 col-sm-offset-3">
                              <!-- <br><br> <h1 style="color:#0fad00;font-size: 45px;">Team Olive Homes Congratulating</h1> -->
                              <img src="<?=base_url('img/')?>welldone.png" class="img-responsive">
                              <h3> 
                                 <?=$close_callback->user_name;?> For Acomplishing The Closure In 
                                 <?=$close_callback->project;?> 
                                 <?=$close_callback->city;?>. Keep up the good work!
                              </h3>
                              <!--    <p style="font-size:20px;color:#5C5C5C;">Thank you for your Verification</p>
                                 <a href="" class="btn btn-success">    Back to Homepage   </a> -->
                              <br>
                              <br>
                           </div>
                        </div>
                        <div class="ex1">
                           <div class="container1">
                              <div class="fbcomment" id="">
                                 <div class="data-icons-complete">
                                    <?php
                                       $likes = $this->greeting_model->countWhere(array("g_id"=>$g->id,"liked!="=>0),"greetingcomments"); 
                                       $commentsCount = $this->greeting_model->countWhere(array("g_id"=>$g->id,"comment!="=>''),"greetingcomments"); 
                                       $no_data = $this->greeting_model->getWhere(array('g_id'=>$g->id,'user_id'=>$this->session->userdata('user_id'),"liked"=>1),'greetingcomments'); 
                                       ?>
                                    <div style="float: left;">
                                       <i id="likeIcon<?=$g->id?>" style="cursor:pointer;<?=(count($no_data)>0?'color: rgb(11, 11, 232)':'')?>"  onclick="likecount('<?=$g->id?>');" class="fa fa-thumbs-up" aria-hidden="true">
                                       <a id="likecount<?=$g->id?>" class="<?=(count($no_data)>0?'active':'')?>">
                                       <?=($likes>0?$likes:'0')?>
                                       </a>
                                       </i> 
                                    </div>
                                    <div style="float: right;">
                                       <i onclick="togglediv('<?=$g->id?>')" style="cursor:pointer" class="fa fa-comments" aria-hidden="true">
                                       <a  id="commentCount<?=$g->id?>">
                                       <?=($commentsCount>0?$commentsCount:'0')?>Comments
                                       </a>
                                       </i> 
                                    </div>
                                 </div>
                                 <br>
                                 <div class="clearfix">
                                 </div>
                                 <br>
                                 <div class="body_comment toggle_div<?=$g->id?> hidden">
                                    <div class="row">
                                       <div class="avatar_comment col-md-1">
                                          <img src="<?=base_url('uploads/'.$this->session->userdata('profile_pic'));?>" alt="avatar"/>
                                       </div>
                                       <div class="box_comment col-md-11">
                                          <textarea class="commentar" id="wishes<?=$g->id?>" placeholder="Add a comment..." style="color: black"></textarea>
                                          <div class="box_post">
                                             <div class="pull-right"> 
                                                <button onclick="submit_comment('<?=$this->session->userdata("user_id")?>','<?=$g->user_id?>','<?=$g->id?>');" type="button" value="1">Post
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <ul id="list_comment<?=$g->id?>" class="col-md-12">
                                          <!-- Start List Comment 2 -->
                                          <?php 
                                             $comment = $this->greeting_model->prevComments($g->id);
                                             if(count($comment)>0)
                                             {
                                             foreach ($comment as $comment) {
                                             if($comment->comment!='')
                                             {
                                             ?>
                                          <li class="box_result row prev_wishes" >
                                             <div class="avatar_comment col-md-1">
                                                <img src="<?=base_url('uploads/'.$comment->user_profile_pic)?>" alt="avatar"/>
                                             </div>
                                             <div class="result_comment col-md-11">
                                                <h4>
                                                   <?=$comment->f_name." ".$comment->l_name;?> 
                                                </h4>
                                                <p>
                                                   <?=$comment->comment;?>
                                                </p>
                                                <div class="tools_comment"> 
                                                   <span aria-hidden="true"> · 
                                                   </span>
                                                   <span> 
                                                   <?=time_since(strtotime(date("Y-m-d H:i:s"))-strtotime($comment->date_added));?>  ago
                                                   </span>
                                                </div>
                                                <ul class="child_replay">
                                                </ul>
                                             </div>
                                          </li>
                                          <?php
                                             }
                                             }
                                             }
                                             ?> 
                                       </ul>
                                       <!-- <button class="show_more" type="button">Load 10 more comments</button> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
             
            

               
            <?php
                }
                elseif($g->type=="ja")
                {
                ?>
            <div class="anniversary text-center">
                <div class="relative">
                  <div class="overlay">
                      <main id="htlfndr-main-content" class="htlfndr-main-content " role="main" style=" ">
                        <article class="htlfndr-thanks-page text-center">
                            <h1> Congratulations <?=$g->username;?> for completing <?= floor(abs(strtotime(date("Y-m-d")) - strtotime($this->session->userdata('emp_doj'))) / (365*60*60*24)) ?>
                              <?=(floor(abs(strtotime(date("Y-m-d")) - strtotime($this->session->userdata('emp_doj'))) / (365*60*60*24))>1)?"Years":"Year"?>
                            </h1>
                            <p>
                              with Olive Homes. You are an asset to our company, and we hope you’ll continue on this path of hard work. We wish you a wonderful work anniversary!
                            </p>
                            <!--  <div class="bglk">
                              <p>You have Completed
                              </p>
                              <span>
                                
                              </span>
                              <p> to CRM
                              </p>
                              </div> -->
                            <!-- <a class="htlfndr-more-link text-center" href="index.html">Back to homepage</a> -->
                        </article>
                      </main>
                      <div class="overlay1">
                      </div>
                      <div class="ex1">
                        <div class="container1">
                            <div class="fbcomment" id="">
                              <div class="data-icons-complete">
                                  <?php
                                    $likes = $this->greeting_model->countWhere(array("g_id"=>$g->id,"liked!="=>0),"greetingcomments"); 
                                    $commentsCount = $this->greeting_model->countWhere(array("g_id"=>$g->id,"comment!="=>''),"greetingcomments"); 
                                    $no_data = $this->greeting_model->getWhere(array('g_id'=>$g->id,'user_id'=>$this->session->userdata('user_id'),"liked"=>1),'greetingcomments'); 
                                    ?>
                                  <div style="float: left;">
                                    <i id="likeIcon<?=$g->id?>" style="cursor:pointer;<?=(count($no_data)>0?'color: rgb(11, 11, 232)':'')?>"  onclick="likecount('<?=$g->id?>');" class="fa fa-thumbs-up" aria-hidden="true">
                                    <a id="likecount<?=$g->id?>" class="<?=(count($no_data)>0?'active':'')?>">
                                    <?=($likes>0?$likes:'0')?>
                                    </a>
                                    </i> 
                                  </div>
                                  <div style="float: right;">
                                    <i onclick="togglediv('<?=$g->id?>')" style="cursor:pointer" class="fa fa-comments" aria-hidden="true">
                                    <a  id="commentCount<?=$g->id?>">
                                    <?=($commentsCount>0?$commentsCount:'0')?>Comments
                                    </a>
                                    </i> 
                                  </div>
                              </div>
                              <br>
                              <div class="clearfix">
                              </div>
                              <br>
                              <div class="body_comment  toggle_div<?=$g->id?> hidden">
                                  <div class="row">
                                    <div class="avatar_comment col-md-1">
                                        <img src="<?=base_url('uploads/'.$this->session->userdata('profile_pic'));?>" alt="avatar"/>
                                    </div>
                                    <div class="box_comment col-md-11">
                                        <textarea class="commentar" id="wishes<?=$g->id?>" placeholder="Add a comment..." style="color: black !important"></textarea>
                                        <div class="box_post">
                                          <div class="pull-right"> 
                                              <button onclick="submit_comment('<?=$this->session->userdata("user_id")?>','<?=$g->user_id?>','<?=$g->id?>');" type="button" value="1">Post
                                              </button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <ul id="list_comment<?=$g->id?>" class="col-md-12">
                                        <!-- Start List Comment 2 -->
                                        <?php 
                                          $comment = $this->greeting_model->prevComments($g->id);
                                          if(count($comment)>0)
                                          {
                                          foreach ($comment as $comment) {
                                          ?> 
                                        <li class="box_result row prev_wishes" >
                                          <div class="avatar_comment col-md-1">
                                              <img src="<?=base_url('uploads/'.$comment->user_profile_pic)?>" alt="avatar"/>                                           
                                          </div>
                                          <div class="result_comment col-md-11">
                                              <h4> 
                                                <?=$comment->f_name." ".$comment->l_name;?> 
                                              </h4>
                                              <p style="color: black"> 
                                                <?=$comment->comment;?> 
                                              </p>
                                              <div class="tools_comment"> 
                                                <span aria-hidden="true"> · 
                                                </span>
                                                <span> 
                                                <?=time_since(strtotime(date("Y-m-d H:i:s"))-strtotime($comment->date_added));?>  ago
                                                </span>
                                              </div>
                                              <ul class="child_replay">
                                              </ul>
                                          </div>
                                        </li>
                                        <?php
                                          }
                                          }
                                          ?> 
                                    </ul>
                                    <!-- <button class="show_more" type="button">Load 10 more comments</button> -->
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
         <?php 
            }
            elseif($g->type=="userpost"){
               $userpostdata = $this->greeting_model->getOneWhere(array("id"=>$g->user_id),"user");
              ?>
              <div class="manual wishes">
                    <div class="container">
                    
                     <div class="col-md-12">
                        <div class="panel panel-default">
                              <div class="panel-body">
                                 <section class="post-heading">
                                    <div class="row">
                                          <div class="col-md-10">
                                             <div class="media">
                                                <div class="media-left">
                                                <a href="#">
                                                   <img class="media-object photo-profile" src="<?=base_url('uploads/'.$userpostdata->profile_pic)?>" width="40" height="40" alt="...">
                                                </a>
                                                </div>
                                                <div class="media-body">
                                                <a href="#" class="anchor-username"><h4 class="media-heading"><?=$userpostdata->first_name." ".$userpostdata->last_name?></h4></a> 
                                               <!--  <a href="#" class="anchor-time">51 mins</a> -->
                                                </div>
                                             </div>
                                          </div>
                                         <!--  <div class="col-md-2">
                                             <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                          </div> -->
                                    </div>             
                                 </section>
                                 <section class="post-body"> 
                                    <br>
                                    <h5><?=$g->p_subject?></h5> 
                                    <p><?=$g->p_desc?></p>
                                    <img src="<?=base_url('uploads/userpost/').$g->file_name?>" class="img-responsive">
                                 </section>
                                 <div class="ex1">
                              <div class="container1">
                                 <div class="fbcomment" id="">
                                    <div class="data-icons-complete">
                                       <?php
                                          $likes = $this->greeting_model->countWhere(array("g_id"=>$g->id,"liked!="=>0),"greetingcomments"); 
                                          $commentsCount = $this->greeting_model->countWhere(array("g_id"=>$g->id,"comment!="=>''),"greetingcomments"); 
                                          $no_data = $this->greeting_model->getWhere(array('g_id'=>$g->id,'user_id'=>$this->session->userdata('user_id'),"liked"=>1),'greetingcomments'); 
                                          ?>
                                       <div style="float: left;">
                                          <i id="likeIcon<?=$g->id?>" style="cursor:pointer;<?=(count($no_data)>0?'color: rgb(11, 11, 232)':'')?>"  onclick="likecount('<?=$g->id?>');" class="fa fa-thumbs-up" aria-hidden="true">
                                          <a id="likecount<?=$g->id?>" class="<?=(count($no_data)>0?'active':'')?>">
                                          <?=($likes>0?$likes:'0')?>
                                          </a>
                                          </i> 
                                       </div>
                                       <div style="float: right;">
                                          <i onclick="togglediv('<?=$g->id?>')" style="cursor:pointer" class="fa fa-comments" aria-hidden="true">
                                          <a  id="commentCount<?=$g->id?>">
                                          <?=($commentsCount>0?$commentsCount:'0')?>Comments
                                          </a>
                                          </i> 
                                       </div>
                                    </div>
                                    <br>
                                    <div class="clearfix">
                                    </div>
                                    <br>
                                    <div class="body_comment toggle_div<?=$g->id?> hidden">
                                       <div class="row">
                                          <div class="avatar_comment col-md-1">
                                             <img src="<?=base_url('uploads/'.$this->session->userdata('profile_pic'));?>" alt="avatar"/>
                                             <span>
                                             <?=$this->session->userdata('user_name');?>
                                             </span>
                                          </div>
                                          <div class="box_comment col-md-11">
                                             <textarea class="commentar" id="wishes<?=$g->id?>" placeholder="Add a comment..."></textarea>
                                             <div class="box_post">
                                                <div class="pull-right"> 
                                                   <button onclick="submit_comment('<?=$this->session->userdata("user_id")?>','<?=$g->user_id?>','<?=$g->id?>');" type="button" value="1">Post
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <ul id="list_comment<?=$g->id?>" class="col-md-12">
                                             <!-- Start List Comment 2 -->
                                             <?php 
                                                $comment = $this->greeting_model->prevComments($g->id);
                                                if(count($comment)>0)
                                                {
                                                foreach ($comment as $comment) {
                                                if($comment->comment!='')
                                                {
                                                ?>
                                             <li class="box_result row prev_wishes" >
                                                <div class="avatar_comment col-md-1">
                                                   <img src="<?=base_url('uploads/'.$comment->user_profile_pic)?>" alt="avatar"/>
                                                </div>
                                                <div class="result_comment col-md-11">
                                                   <h4 class="test">
                                                      <?=$comment->f_name." ".$comment->l_name;?>
                                                   </h4>
                                                   <p>
                                                      <?=$comment->comment;?>
                                                   </p>
                                                   <div class="tools_comment"> 
                                                      <span aria-hidden="true"> · 
                                                      </span>
                                                      <span>
                                                      <?=time_since(strtotime(date("Y-m-d H:i:s"))-strtotime($comment->date_added));?> ago
                                                      </span>
                                                   </div>
                                                   <ul class="child_replay">
                                                   </ul>
                                                </div>
                                             </li>
                                             <?php
                                                }
                                                }
                                                }
                                                ?>
                                          </ul>
                                          <!-- <button class="btn-success show" onclick="showFunction()"> Show More
                                             </button>
                                             <button class="btn-success hide" onclick="hideFunction()"> Hide
                                             </button>
                                              <button class="show_more" type="button">Load 10 more comments</button> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                              </div>
                        </div>  
                     </div>

                     
                  </div>
                </div>
              <?php
            }
            elseif($g->type=="new"){
               ?>

                <div class="welcome">
                    <div class="container">
                      <div class="row">
                       
                          <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12 profile-badge">
                            <div class="upper-img"></div>
                            <div class="profile-pic">
                                <img src="https://www.goarabic.com/vm/wp-content/uploads/2019/05/dummy-profile-pic.jpg">
                            </div>
                            <div class="user-detail text-center">
                            <h1>Welcome</h1>
                                <h3><?=$g->username;?></h3>
                                <p>to The Onboard</p>
                               
                            </div>
                          </div>
                      </div>
                      <div class="ex1">
                              <div class="container1">
                                 <div class="fbcomment" id="">
                                    <div class="data-icons-complete">
                                       <?php
                                          $likes = $this->greeting_model->countWhere(array("g_id"=>$g->id,"liked!="=>0),"greetingcomments"); 
                                          $commentsCount = $this->greeting_model->countWhere(array("g_id"=>$g->id,"comment!="=>''),"greetingcomments"); 
                                          $no_data = $this->greeting_model->getWhere(array('g_id'=>$g->id,'user_id'=>$this->session->userdata('user_id'),"liked"=>1),'greetingcomments'); 
                                          ?>
                                       <div style="float: left;">
                                          <i id="likeIcon<?=$g->id?>" style="cursor:pointer;<?=(count($no_data)>0?'color: rgb(11, 11, 232)':'')?>"  onclick="likecount('<?=$g->id?>');" class="fa fa-thumbs-up" aria-hidden="true">
                                          <a id="likecount<?=$g->id?>" class="<?=(count($no_data)>0?'active':'')?>">
                                          <?=($likes>0?$likes:'0')?>
                                          </a>
                                          </i> 
                                       </div>
                                       <div style="float: right;">
                                          <i onclick="togglediv('<?=$g->id?>')" style="cursor:pointer" class="fa fa-comments" aria-hidden="true">
                                          <a  id="commentCount<?=$g->id?>">
                                          <?=($commentsCount>0?$commentsCount:'0')?>Comments
                                          </a>
                                          </i> 
                                       </div>
                                    </div>
                                    <br>
                                    <div class="clearfix">
                                    </div>
                                    <br>
                                    <div class="body_comment toggle_div<?=$g->id?> hidden">
                                       <div class="row">
                                          <div class="avatar_comment col-md-1">
                                             <img src="<?=base_url('uploads/'.$this->session->userdata('profile_pic'));?>" alt="avatar"/>
                                             <span>
                                             <?=$this->session->userdata('user_name');?>
                                             </span>
                                          </div>
                                          <div class="box_comment col-md-11">
                                             <textarea class="commentar" id="wishes<?=$g->id?>" placeholder="Add a comment..."></textarea>
                                             <div class="box_post">
                                                <div class="pull-right"> 
                                                   <button onclick="submit_comment('<?=$this->session->userdata("user_id")?>','<?=$g->user_id?>','<?=$g->id?>');" type="button" value="1">Post
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <ul id="list_comment<?=$g->id?>" class="col-md-12">
                                             <!-- Start List Comment 2 -->
                                             <?php 
                                                $comment = $this->greeting_model->prevComments($g->id);
                                                if(count($comment)>0)
                                                {
                                                foreach ($comment as $comment) {
                                                if($comment->comment!='')
                                                {
                                                ?>
                                             <li class="box_result row prev_wishes" >
                                                <div class="avatar_comment col-md-1">
                                                   <img src="<?=base_url('uploads/'.$comment->user_profile_pic)?>" alt="avatar"/>
                                                </div>
                                                <div class="result_comment col-md-11">
                                                   <h4 class="test">
                                                      <?=$comment->f_name." ".$comment->l_name;?>
                                                   </h4>
                                                   <p>
                                                      <?=$comment->comment;?>
                                                   </p>
                                                   <div class="tools_comment"> 
                                                      <span aria-hidden="true"> · 
                                                      </span>
                                                      <span>
                                                      <?=time_since(strtotime(date("Y-m-d H:i:s"))-strtotime($comment->date_added));?> ago
                                                      </span>
                                                   </div>
                                                   <ul class="child_replay">
                                                   </ul>
                                                </div>
                                             </li>
                                             <?php
                                                }
                                                }
                                                }
                                                ?>
                                          </ul>
                                          <!-- <button class="btn-success show" onclick="showFunction()"> Show More
                                             </button>
                                             <button class="btn-success hide" onclick="hideFunction()"> Hide
                                             </button>
                                              <button class="show_more" type="button">Load 10 more comments</button> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                    </div>
                </div>
                <?php
            }
            else
            {
            //echo $g->type." this Check with Developer";
              echo "No Posts Yet!";
            }
            }
            }
            ?>
         <!--/tabs-->
         </div>
         <div class="tab-main">
            <!--/tabs-inner-->
         </div>
         
         <!--//tabs-inner-->
         <!--footer section start-->
         <footer>
            <p>&copy 
               <?= date('Y')?> Olive Homes .
            </p>
         </footer>
         <!--footer section end-->
     
   </div>
   </div>
   <!--//content-inner-->
   <!--/sidebar-menu-->
   <div class="sidebar-menu">
      <header class="logo">
         <a href="#" class="sidebar-icon"> 
         <span class="fa fa-bars">
         </span> 
         </a>  
         <span id="logo">
            <h1>Olive Homes
            </h1>
         </span>
         <!--<img id="logo" src="" alt="Logo"/>--> 
         </a> 
      </header>
      <div style="border-top:1px solid rgba(69, 74, 84, 0.7)">
      </div>
      <!--/down-->
      <div class="down">
         <?php $this->load->view('profile_pic');?>
         <span class=" name-caret">
         <?php echo $this->session->userdata('user_name'); ?>
         </span>
         <p>
            <?php echo $this->session->userdata('user_type'); ?>
         </p>
         <ul>
            <li>
               <a class="tooltips" href="<?= base_url('dashboard/profile'); ?>">
               <span>Profile
               </span>
               <i class="lnr lnr-user">
               </i>
               </a>
            </li>
            <li>
               <a class="tooltips" style=" color: #00C6D7 !important; " href="#">
               <span>Team Size
               </span>
               <?php if($this->session->userdata("manager_team_size")) echo $this->session->userdata("manager_team_size")?$this->session->userdata("manager_team_size"):''?>
               </a>
            </li>
            <li>
               <a class="tooltips" href="<?php echo base_url()?>login/logout">
               <span>Log out
               </span>
               <i class="lnr lnr-power-switch">
               </i>
               </a>
            </li>
         </ul>
      </div>
      <!--//down-->
      <?php $this->load->view('inc/header_nav'); ?>
      <div style="height: 100%">
      </div>
   </div>
   <div class="clearfix">
   </div>
   </div>
   <script>
      var toggle = true;
      $(".sidebar-icon").click(function() {
        if (toggle)
        {
          $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
          $("#menu span").css({
            "position":"absolute"}
                             );
        }
        else
        {
          $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
          setTimeout(function() {
            $("#menu span").css({
              "position":"relative"}
                               );
          }
                     , 400);
        }
        toggle = !toggle;
      }
                              );
      function submit_comment(current_id,greetuserid,id) {
        
        var l = window.location;
        var BASE_URL = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];
        var wishes = $('#wishes'+id).val();
        if(wishes=='')
          return false;
      
        $('.se-pre-con').show();
        $.ajax({
          type:"POST",
          url: BASE_URL+"/postWishes",
          data:{
            user_id:current_id,g_id:id,comment:wishes}
          ,
          success:function(data) {
            $('#wishes'+id).val('');
            $('#list_comment'+id).html(data);
            $('#commentCount'+id).html(parseInt( $('#commentCount'+id).html())+1);
            $('.se-pre-con').hide();
          }
        }
              );
      } 
      function likecount(greetingId) {
        var likecount = $("#likecount"+greetingId).html();
        var className = $("#likecount"+greetingId).attr('class');
        if(className)
        {
          $("#likecount"+greetingId).html(parseInt(likecount)-1);
          $("#likecount"+greetingId).removeClass("active");
          $("#likeIcon"+greetingId).css("color","#3d3d3c !important");
          var l = window.location;
          var BASE_URL = '<?=base_url()?>';
          $.ajax({
            type:"POST",
            url: "<?=base_url('dashboard/postLike')?>",
            data:{
              g_id:greetingId,liked:0}
            ,
            success:function(data) {
            }
          }
                );
        }
        else
        {
          $("#likecount"+greetingId).html(parseInt(likecount)+1);
          $("#likecount"+greetingId).addClass("active");
          $("#likeIcon"+greetingId).css("color","#0b0be8 !important");
          $.ajax({
            type:"POST",
            url: "<?=base_url('dashboard/postLike')?>",
            data:{
              g_id:greetingId,liked:1}
            ,
            success:function(data) {
            }
          }
                );
        }
      }
      function togglediv(id){
        $(".toggle_div"+id).toggleClass("hidden");
      }
   </script>
   <!--js -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vroom.css">
   <script type="text/javascript" src="<?php echo base_url()?>assets/js/vroom.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/js/TweenLite.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/js/CSSPlugin.min.js"></script>
   <!--<script src="<?php echo base_url()?>assets/js/scripts.js"></script>-->
   <!-- Bootstrap Core JavaScript -->
   <?php
      function time_since($since) {
      $chunks = array(
      array(60 * 60 * 24 * 365 , 'year'),
      array(60 * 60 * 24 * 30 , 'month'),
      array(60 * 60 * 24 * 7, 'week'),
      array(60 * 60 * 24 , 'day'),
      array(60 * 60 , 'hour'),
      array(60 , 'minute'),
      array(1 , 'second')
      );
      for ($i = 0, $j = count($chunks); $i < $j; $i++) {
      $seconds = $chunks[$i][0];
      $name = $chunks[$i][1];
      if (($count = floor($since / $seconds)) != 0) {
      break;
      }
      }
      $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
      return $print;
      }
      ?>  
</body>
</html>