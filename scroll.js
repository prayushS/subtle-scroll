window.subtleScroll = function(element) {


		    var nav = document.querySelector(element),

		        // array of max three classes, first will be top shadow, second will be bottom shadow, third will be general shadow
		        scrollClass = nav.getAttribute('data-class').trim().split(",");




		    var initialize = function() {
		            nav.addEventListener('scroll', scrollShadow, false);

		            //if( checkOverflow ){

		            //	nav.classList.add('shadowBottom');

		            //}
		        },
		        checkOverflow = function() {

		            return !!((nav.offsetHeight < nav.scrollHeight) || (nav.offsetWidth < nav.scrollWidth));

		        },
		        scrollShadow = function() {
		            var height = this.scrollHeight - this.clientHeight;

		            if (this.scrollTop <= 5) {

		                this.className = "";

		                //this.classList.add('shadowBottom');

		                this.classList.add( scrollClass[1] );

		            } else if (this.scrollTop > 5 && this.scrollTop < height) {

		                this.className = "";

		                //this.classList.add('shadow');

		                this.classList.add( scrollClass[2] );

		            } else if (this.scrollTop >= height) {

		                //this.classList.remove('shadow');

		                this.classList.remove( scrollClass[2] );

		                //this.classList.add('shadowTop');

		                this.classList.add( scrollClass[0] );

		            } else {

		                return;
		            }
		        };


		        initialize();

		}