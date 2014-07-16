<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Create a Wrev form</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/main.css">
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row text-center">
       <a href="#" data-toggle="modal" data-target="#basicModal"><button class="btn btn-lg" style="background:#63308F; color:white;">Create a Wrev</button></a>
     </div>
</div>

  <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
      
        <div class="modal-content" style="color:white; background:#216EAD; width:800px;">
        <div class="panel" style="border:none; ">
        <div class="panel-body" style="background:#216EAD;">
        <h1 style="text-align:center;">create a wrev</h1>
        	
        	<div class="col-md-4" style="padding:10px; ">
            	<p style="text-align:center;">select one or more</p>
		
                <div class="apare" id="exhgt">
		    
	            <img src="images/hotspots_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;"> &nbsp; &nbsp;
		    
		    <img src="images/icebreakers_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;"> &nbsp; &nbsp;
 
		    <img src="images/culture_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp
 
		    <img src="images/meetups_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 
		    <img src="images/exploringyourcity_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
   
		    <img src="images/loveandromance_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 
		    <img src="images/parties_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 	    
		    <img src="images/clubs_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 		    
		    <img src="images/concerts_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 	    
		    <img src="images/festivals_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 		    
		    <img src="images/lounges_button.png" width="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
 	    
		    <img src="images/bars_button.png" wwidth="100" height="100" alt="Robot" style="cursor: pointer; padding: 3px; border: none; background-image: none; background-position: initial initial; background-repeat: initial initial;">&nbsp; &nbsp;
		
		</div>
		
            </div>
            <div class="col-md-8" style="border-left:1px solid white;">
            	<div class="row" >
                	<div class="col-md-8">
            		<form class="form-horizontal" role="form">
  					<div class="form-group">
    					<label class="col-sm-2 control-label">title:</label>
    					<div class="col-sm-10">
      						<input type="text" class="form-control" placeholder="type in something witty">
    					</div>
  					</div>
                    
                    <div class="form-group">
    					<label class="col-sm-2 control-label">info:</label>
    					<div class="col-sm-10">
      						<textarea class="form-control" rows="3" placeholder="type in something attention grabbing"></textarea>
    					</div>
  					</div>
                    <div class="form-group">
                    	<div class="form-group row">
                        	<label class="col-sm-2 control-label" style="margin-left:10px;">date:</label>
                            <div class="col-sm-4">
                            	<input type="date" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label">time:</label>
                            <div class="col-sm-3">
                            	<input type="text" class="form-control" placeholder="hours?">
                            </div>
                         </div>   
                    </div>
                    
            		
                    
                    <div class="form-group">
    					<label class="col-sm-2 control-label">location:</label>
    					<div class="col-sm-10">
      						<input type="text" class="form-control" placeholder="where is it?">
    					</div>
  					</div>
                    
                    <div class="form-group">
                    	<div class="form-group row">
                        	<label class="col-sm-2 control-label" style="margin-left:15px;">state:</label>
                            <div class="col-sm-3" >
                            	<input type="text" class="form-control" >
                            </div>
                            <label class="col-sm-1 control-label" >city:</label>
                            <div class="col-sm-5" >
                            	<input type="text" class="form-control">
                            </div>
                            
                         </div>   
                    </div>
                    <div class="form-group">
    					<label class="col-sm-2 control-label">zip:</label>
    					<div class="col-sm-3">
      						<input type="text" class="form-control" >
    					</div>
  					</div>
                    
                    <div class="form-group">
                    	<div class="form-group row">
                        	<label class="col-sm-2 control-label" style="margin-left:10px;">country:</label>
                            <div class="col-sm-3">
                            	<input type="text" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label" style="margin:0;">phone:</label>
                            <div class="col-sm-4">
                            	<input type="tel" class="form-control">
                            </div>
                         </div>                               
                    </div>
                    
                    <div class="form-group">
    					<label class="col-sm-2 control-label">email:</label>
    					<div class="col-sm-10">
      						<input type="text" class="form-control">
    					</div>
  					</div>
                    
                    <div class="form-group">
    					<label class="col-sm-3 control-label">website(s):</label>
    					<div class="col-sm-9">
      						<input type="text" class="form-control" >
    					</div>
  					</div>
  
  					<div class="form-group">
                    	<label class="col-sm-2 control-label">free?</label>
    					<div class="col-sm-10">
       				  		   <input type="checkbox" name="yes" value="yes"> yes
                          	   <input type="checkbox" name="no" value="no"> no
                               
    					</div>
                     </div>  
                     <div class="form-group">
    					<label class="col-sm-2 control-label">price($):</label>
    					<div class="col-sm-10">
      						<input type="text" class="form-control">
    					</div>
  					</div>  
                     <div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
      						
        					<form>
       				  		   ticketed <input type="radio" name="ticket" value="ticketed"> 
                          	   nonticketed <input type="radio" name="ticket" value="nonticketed"> 
         					</form>
      						
    					</div>
                     </div> 
                     
                    
                    <div class="form-group">
                    	<label class="col-sm-5">event type</label>
                        <div class="col-sm-7">
                        	<input type="checkbox" value="public"> public 
                          	<input type="checkbox" value="private"> private
                        </div>
                    </div>
                      
				</form>
                	</div>
                    <div class="col-md-4" style="text-align:center;">
            			<!--<div style="width:150px; height:150px; ">
                    	<img src="images/camera_icon.png" style="min-width:100%; max-width:100%;">
                		</div>-->
               			<i class="fa fa-camera fa-flip-horizontal fa-5x"></i>
                		<button type="button" class="btn" style="background:#47AFEA; color:white;">upload image</button>
             
              	 		<form style="margin-top:25px;">
                			hide event address <input type="checkbox">
                		</form>
                
                		<i class="fa fa-ticket fa-flip-horizontal fa-5x" style="margin-top:25px;"></i>
                		<button type="button" class="btn" style="background:#47AFEA; color:white;">set up tickets</button>
                
            		</div>
                </div>
                <hr width="90%">
               <div class="row">
               		<div class="row">
                    	<div class="col-md-3" style="text-align:center;">
                    	<span class="glyphicon glyphicon-user fa-5x"></span>
                        
                        <button type="button" class="btn" style="background:#47AFEA; color:white;">invite friends</button>
                        </div>
                        
                        <div class="col-md-8">
                        <p>share this wrev on your facebook, twitter, or other media sites</p>
                        <p style="text-align:center;">
                        	<span class="fa-stack fa-lg" style="padding:10px 25px;">
  								<i class="fa fa-circle fa-stack-2x"></i>
  								<i class="fa fa-facebook fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
							</span>
                        	<span class="fa-stack fa-lg" style="padding:10px 25px;">
  								<i class="fa fa-circle fa-stack-2x"></i>
  								<i class="fa fa-twitter fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
							</span>
                        	<span class="fa-stack fa-lg" style="padding:10px 25px;">
  								<i class="fa fa-circle fa-stack-2x"></i>
  								<i class="fa fa-instagram fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
							</span>
                        	<span class="fa-stack fa-lg" style="padding:10px 25px;">
  								<i class="fa fa-circle fa-stack-2x"></i>
  								<i class="fa fa-tumblr fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
							</span>
                        	<span class="fa-stack fa-lg" style="padding:10px 25px;">
  								<i class="fa fa-circle fa-stack-2x"></i>
  								<i class="fa fa-youtube fa-stack-1x fa-inverse" style="color:#216EAD;"></i>
							</span>
                        </p>
                        
                        </div>

                     </div>
                     <div class="row" style="margin-top:35px;">
                     	<div class="col-md-3" style="text-align:center;">
                     	<i class="fa fa-tag fa-5x"></i>
                        <button type="button" class="btn" style="background:#47AFEA; color:white;">create tags</button>
                       	</div>
                        
                        <div class="col-md-8">
                        <textarea class="form-control" rows="3"></textarea>
                        
                        <button type="button" style="color:#216EAD;">add</button>
                        <button type="button" style="color:#216EAD;">delete</button>
                        
                        </div>
                     </div>
               </div>
            </div>
            <div class="pull-right" style="display:inline;">
            
             
             <button type="submit" class="btn btn-lg" style="color:#216EAD;">Submit</button>
             </div>
        </div>
        </div>
        </div>
      </div>
  </div>      


   <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/imgpick.js"></script>
</body>
</html>
