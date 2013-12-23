<?php

// +----------------------------------------------------------------------+
// | Proprietary License  Onidesk  I.C.S. -  PORTUGAL                     |
// +----------------------------------------------------------------------+
// | Author: José Augusto Ferreira Franco < http://onidesk.sytes.net>     |
// +----------------------------------------------------------------------+
//


/**
 * @version 1.0
 * @author   : José Augusto Ferreira Franco <guto.onidesk@gmail.com>
 * @Webname :  Webmaster Guto Ferreira
 */



/***
 *@  Definição da classe
 *@
 *@  Class defenition
 **/
class winDialog {

	/***
	 *@ Constructor Method
	 *@ return Object $Dialog       returns the 'winDialog' object
	 **/



	function winDialog($class,$callback,$text)
	{
		global $Dialog;
		if(!$Dialog){
			$Dialog = $this->make_window(215,100);
			$Dialog['window']->connect('destroy',array(&$this,'hide'));
			$this->fixed = &new GTKFixed();
			$this->fixed->set_usize(215,100);
			$Dialog['fixed']->put($this->fixed,0,0);
			$bg = $this->LoadPixmap($this->fixed,"./pixmaps/info_box.xpm",0,0);
			$frame = $this->make_frame($this->fixed,150,60,"Notice ::",45,10);
			$Text = $this->Format_Text($this->fixed ,$text,50,30);
			$button = $this->make_button($this->fixed,"OK",65,74);
			$button->connect("clicked",array(&$class,$callback));
			$Dialog['window']->show_all();
		}else{
			$Dialog['window']->hide();
			$Dialog = $this->make_window(215,100);
			$Dialog['window']->connect('destroy',array(&$this,'hide'));
			$this->fixed = &new GTKFixed();
			$this->fixed->set_usize(215,100);
			$Dialog['fixed']->put($this->fixed,0,0);
			$bg = $this->LoadPixmap($this->fixed,"./pixmaps/info_box.xpm",0,0);
			$frame = $this->make_frame($this->fixed,150,60,"Notice ::",45,10);
			$Text = $this->Format_Text($this->fixed ,$text,50,30);
			$button = $this->make_button($this->fixed,"OK",65,74);
			$button->connect("clicked",array(&$class,$callback));
			$Dialog['window']->show_all();
		}
	}

	/**
	 *@ Method that builds the windows on PHP-GTK
	 *@ access public (as internal method)
	 *@ return array             returns an array of objects (gtkwindow && gtkfixed)
	 **/
	function make_window($width,$length)
	{
		$window = &new GTKWindow();
		$window->set_position(GTK_WIN_POS_CENTER);
		$window->set_default_size($width,$length);
		$window->set_title("Guto´s winDialog");
		$window->set_policy(false,false,false);
		$window->realize();
		$fixed = &new GTKFixed();
		$window->add($fixed);
		$object['window']= $window;
		$object['fixed'] = $fixed;
		return $object;
	}


	/**
	 *@ Method to build the PHP-GTK buttons
	 *@ access public (as internal method)
	 *@ return Object $button   returns the oject button
	 **/
	function make_button($annex_on,$label,$hor_pos,$vert_pos)
	{
		$button = &new GTKButton($label);
		$button->set_usize(75,25);
		#$this->FlyMsg($msg,$button);
		$annex_on->put($button,$hor_pos,$vert_pos);
		return $button;
	}

	/**
	 *@ Method to format text on PHP-GTK
	 *@ access public (as internal method)
	 *@ return Object $label    returns the object $label as formated text
	 **/
	function Format_Text($annex_on,$msg,$hor_pos,$vert_pos)
	{
		$label = &new GTKLabel($msg);
		$style = &new GTKStyle();
		$style->font = gdk::font_load ("-*-arial-bold-r-*-*-*-105-*-*-*-*-*-*");
		$label->set_style($style);
		$annex_on->put($label,$hor_pos,$vert_pos);
		return  $label;
	}
	/**
	 *@ Method that builds the frames on PHP-GTK
	 *@ access public (as internal method)
	 *@ return Object $frame   returns the object $frame
	 **/
	function make_frame($annex_on,$width,$length,$msg,$hor_pos,$vert_pos)
	{
		$frame = &new GTKFrame();
		$frame->set_usize($width,$length);
		$frame->set_label($msg);
		$frame->set_shadow_type("GTK_SHADOW_IN");
		$annex_on->put($frame,$hor_pos,$vert_pos);
		return $frame;
	}



	/**
	 *@ Method to load images {(pixmap)} on the format xpm  on PHP-GTK
	 *@ access public (as internal method)
	 *@ return Object $pixmap    returns the object $pixmap as image
	 **/


	function LoadPixmap($annex_on,$img_root,$hor_pos,$vert_pos)
	{
		list ($gdk_pixmap,$mask) = gdk::pixmap_create_from_xpm($annex_on->window ,null,$img_root);
		$pixmap = &new GtkPixmap($gdk_pixmap,$mask);
		$annex_on->put($pixmap,$hor_pos,$vert_pos);
		return $pixmap;
	}



	/**
	 *@ Method that hides window objects  on PHP-GTK
	 *@ access public (as internal method)
	 *@ return void    returns void
	 **/
	function hide()
	{
		global $Dialog;
		$Dialog['window']->hide();
	}

	/**
	 *@ Method that allows to exit from application  on PHP-GTK
	 *@ access public (as internal method)
	 *@ return void    returns void
	 **/
	function shutdown()
	{
		Gtk::main_quit();
	}
}


?>
