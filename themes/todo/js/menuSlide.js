
var menuSlide, menuWidth, hideWidth, showWidth, moveStep, menuState = 0;

	function moveMenu(){
		menuSlide = document.getElementById( 'middle' );
		menuStyle = window.getComputedStyle( menuSlide );

		getMenuWidth = menuStyle.width;
		getMenuWidth = getMenuWidth.slice( 0,getMenuWidth.indexOf( "px" ) );

		menuWidth = Math.ceil( Number( getMenuWidth ) );

		if ( menuState = 0 ){
				hideWidth = Math.ceil( menuWidth * 10/100 );
				showWidth = menuWidth;

				moveStep = Math.ceil( Math.abs( menuWidth - hideWidth ) / 30 );

				menuState = 1;
		}
		if ( menuState = 1 ){
				hideMenu();
				menuState = 2;
		}else if ( menuState = 2 ){
				showMenu();
				menuState = 1;
		}
	}

	function hideMenu(){
		menuWidth -= moveStep;
		menuSlide.style.width = String( menuWidth ) + 'px';

		setTimeout("if (menuWidth>hideWidth+moveStep) hideMenu()",3);
	}

	function showMenu(){
		menuWidth += moveStep;
		menuSlide.style.width = String( menuWidth ) + 'px';

		setTimeout("if (menuWidth<hideWidth+moveStep) showMenu()",3);
	}
