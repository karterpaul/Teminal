<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Test Terminal</title>
 <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.mousewheel-min.js"></script>
    <script src="js/jquery.terminal-min.js"></script>
    <link href="css/jquery.terminal.css" rel="stylesheet"/>
    <script>
    jQuery(document).ready(function($)
	 {
	
	 // this for disabling the right click 
	 $(document).bind("contextmenu",function(e)
	 {
     	e.preventDefault();//or return false;
	 });
	 //end right click
	 
	
	  term = $('body').terminal(function(command, term) {
              
			   
		console.log("commad:"+command);
				
        if ($.trim(command) !== '')
		{     
			
			if($.trim(command.toLowerCase())=="help")
			{
			 term.echo("Type 'details' for details about the program ");
			 term.echo("Type 'route' for routemap ");
			 term.echo("Type 'location' for details about the location ");
			 
			}
			
			
			if($.trim(command.toLowerCase())=="details")
			{
			 term.echo("[[gu;<color>]some text]");
			

			}
			
			if($.trim(command.toLowerCase())=="route")
			{
			 term.echo("Fetching route");
			}
									
			if($.trim(command.toLowerCase())=="location")
			{
			 term.echo("location is  1E31W");
			}
			 
			
        } 
		
		
    }, {
        greetings: "Welcome",
		onInit:function(term)
				{
					 term.echo( "                                            ");
					 term.echo( "        #  ####  #    # ###### #####  #   # ");
					 term.echo( "        # #    # #    # #      #    #  # #  ");
					 term.echo( "        # #    # #    # #####  #    #   #   ");
					 term.echo( "        # #  # # #    # #      #####    #   ");
					 term.echo( "   #    # #   #  #    # #      #   #    #   ");
					 term.echo( "    ####   ### #  ####  ###### #    #   #   ");
					 term.echo( "                                            ");
					 
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 term.echo( "         tttt                                                        tttt          ");
					 term.echo( "      ttt:::t                                                     ttt:::t          ");
					 term.echo( "      t:::::t                                                     t:::::t          ");
					 term.echo( "      t:::::t                                                     t:::::t          ");
					 term.echo( "ttttttt:::::ttttttt        eeeeeeeeeeee        ssssssssss   ttttttt:::::ttttttt    ");
					 term.echo( "t:::::::::::::::::t      ee::::::::::::ee    ss::::::::::s  t:::::::::::::::::t    ");
					 term.echo( "t:::::::::::::::::t     e::::::eeeee:::::eess:::::::::::::s t:::::::::::::::::t    ");
					 term.echo( "tttttt:::::::tttttt    e::::::e     e:::::es::::::ssss:::::stttttt:::::::tttttt    ");
					 term.echo( "      t:::::t          e:::::::eeeee::::::e s:::::s  ssssss       t:::::t          ");
					 term.echo( "      t:::::t          e:::::::::::::::::e    s::::::s            t:::::t          ");
					 term.echo( "      t:::::t          e::::::eeeeeeeeeee        s::::::s         t:::::t          ");
					 term.echo( "      t:::::t    tttttte:::::::e           ssssss   s:::::s       t:::::t    tttttt");
					 term.echo( "      t::::::tttt:::::te::::::::e          s:::::ssss::::::s      t::::::tttt:::::t");
					 term.echo( "      tt::::::::::::::t e::::::::eeeeeeee  s::::::::::::::s       tt::::::::::::::t");
					 term.echo( "        tt:::::::::::tt  ee:::::::::::::e   s:::::::::::ss          tt:::::::::::tt");
					 term.echo( "          ttttttttttt      eeeeeeeeeeeeee    sssssssssss              ttttttttttt  ");
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 term.echo( "                                                                                   ");
					 					 
					 
					 
					 term.echo("Type 'help' for help");
					 term.echo("Type 'location' for location info");
					 
				
				
				},
        name: 'js_demo',
		clear: false,
        height: 200,
        prompt: 'js> ',
		
		
    });
	
      
    });
    </script>



</head>

<body>
</body>
</html>
