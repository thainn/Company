/* 
 *
 * library.js var0.1
 * 
 * Copyright(c) INVOGUE.CO,. Ltd. ALL Rights Reserved.
 * http://www.invogue.co.jp/
 * 
 */

(function($) {
	$.library = {
		analysis: function(path){
			var self = this;
			this.originalPath = path;
			this.absolutePath = (function(){
				var e = document.createElement('span');
				e.innerHTML = '<a href="' + path + '" />';
				return e.firstChild.href;
			})();
			
			var fields = {'schema' : 2, 'username' : 5, 'password' : 6, 'host' : 7, 'path' : 9, 'query' : 10, 'fragment' : 11};
			var r = /^((\w+):)?(\/\/)?((\w+):?(\w+)?@)?([^\/\?:]+):?(\d+)?(\/?[^\?#]+)?\??([^#]+)?#?(\w*)/.exec(this.absolutePath);
			for (var field in fields) {
				this[field] = r[fields[field]];
			}
			this.querys = {};
			if(this.query){
				$.each(self.query.split('&'), function(){
					var a = this.split('=');
					if (a.length == 2) self.querys[a[0]] = a[1];
				});
			}
		},
		rollover: function(options) {
			var c = $.extend({
						hoverSelector : 'img.rover, input.rover, .all-rover img',
						groupSelector : '.group-rover',
						activeclass   : 'active',
						postfix       : '_on'
					}, options);
			
			var rolloverImgs = $(c.hoverSelector).filter(isNotCurrent);
			
			rolloverImgs.each(function(){
				this.originalSrc = $(this).attr('src');
				this.rolloverSrc = this.originalSrc.replace(new RegExp('('+c.postfix+')?(\.gif|\.jpg|\.png)$'), c.postfix+"$2");
				this.rolloverImg = new Image;
				this.rolloverImg.src = this.rolloverSrc;
			});
			
			var groupingImgs = $(c.groupSelector).find('img').filter(isRolloverImg);
			
			rolloverImgs.not(groupingImgs).hover(function(){
				if(!$(this).hasClass(c.activeclass)){$(this).attr('src',this.rolloverSrc);}
			},function(){
				if(!$(this).hasClass(c.activeclass)){$(this).attr('src',this.originalSrc);}
			});
			
			$(c.groupSelector).hover(function(){
				$(this).find('img').filter(isRolloverImg).each(function(){
					if(!$(this).hasClass(c.activeclass)){$(this).attr('src',this.rolloverSrc);}
				});
			},function(){
				$(this).find('img').filter(isRolloverImg).each(function(){
					if(!$(this).hasClass(c.activeclass)){$(this).attr('src',this.originalSrc);}
				});
			});
			
			function isNotCurrent(i){return Boolean(!this.currentSrc);}
			function isRolloverImg(i){return Boolean(this.rolloverSrc);}
		},
		active: function(options) {
			var c = $.extend({
						id       : '',
						type     : 'img',  //(img text Either becomes active.)
						addclass : 'active',
						postfix  : '_on'
					}, options);
			if(c.id != '' && c.type == 'img'){
				$("img#"+c.id).each(function(){
					var dot = $(this).attr('src').lastIndexOf('.');
					var imgsrc_ro = $(this).attr('src').substr(0, dot) + c.postfix + $(this).attr('src').substr(dot, 4);
					$(this).attr('src',imgsrc_ro).addClass(c.addclass);
				});
			}else if(c.id != '' && c.type == 'text'){
				$("#"+c.id).each(function(){
					$(this).addClass(c.addclass);
				});
			}
		},
		scroll: function(options) {
			var scroller = (function() {
				var c = $.extend({
					easing:100,
					step:30,
					fps:60,
					fragment:''
				}, options);
				c.ms = Math.floor(1000/c.fps);
				var timerId;
				var param = {
					stepCount:0,
					startY:0,
					endY:0,
					lastY:0
				};
				function move() {
					if (param.stepCount == c.step) {
						//setFragment(param.hrefdata.absolutePath);
						window.scrollTo(getCurrentX(), param.endY);
					} else if (param.lastY == getCurrentY()) {
						param.stepCount++;
						window.scrollTo(getCurrentX(), getEasingY());
						param.lastY = getEasingY();
						timerId = setTimeout(move, c.ms); 
					} else {
						if(getCurrentY()+getViewportHeight() == getDocumentHeight()) {
							setFragment(param.hrefdata.absolutePath);
						}
					}
				}
				function setFragment(path){
					location.href = path
				}
				function getCurrentY() {
					return document.body.scrollTop  || document.documentElement.scrollTop;
				}
				function getCurrentX() {
					return document.body.scrollLeft  || document.documentElement.scrollLeft;
				}
				function getDocumentHeight(){
					return document.documentElement.scrollHeight || document.body.scrollHeight;
				}
				function getViewportHeight(){
					return (!$.browser.safari && !$.browser.opera) ? document.documentElement.clientHeight || document.body.clientHeight || document.body.scrollHeight : window.innerHeight;
				}
				function getEasingY() {
					return Math.floor(getEasing(param.startY, param.endY, param.stepCount, c.step, c.easing));
				}
				function getEasing(start, end, stepCount, step, easing) {
					var s = stepCount / step;
					return (end - start) * (s + easing / (100 * Math.PI) * Math.sin(Math.PI * s)) + start;
				}
				return {
					set: function(options) {
						this.stop();
						if (options.startY == undefined) options.startY = getCurrentY();
						param = $.extend(param, options);
						param.lastY = param.startY;
						timerId = setTimeout(move, c.ms); 
					},
					stop: function(){
						clearTimeout(timerId);
						param.stepCount = 0;
					}
				};
			})();
			$('a[href^=#], area[href^=#]').not('a[href=#], area[href=#]').each(function(){
				this.hrefdata = new $.library.analysis(this.getAttribute('href'));
			}).click(function(){
				var target = $('#'+this.hrefdata.fragment);
				if (target.length == 0) target = $('a[name='+this.hrefdata.fragment+']');
				if (target.length) {
					scroller.set({
						endY: target.offset().top,
						hrefdata: this.hrefdata
					});
					return false;
				}
			});
		},
		inputfocus: function(options) {
			var c = $.extend({
				usuallyClass : 'input-usually',
				focusClass   : 'input-focus'
			}, options);
			$('input[type=text],input[type=password],textarea').addClass(c.usuallyClass);
			$('.'+c.usuallyClass).focus(function(){
				$(this).addClass(c.focusClass);
			});
			$('.'+c.usuallyClass).blur(function(){
				if($(this).find(c.focusClass)){
					$(this).removeClass(c.focusClass);
				}
			});
		},
		heights: function(options){
			var c = $.extend({
				target : '',
				row    : 0
			}, options);
			
			if(c.row > 0){
				var sets = [], temp = [];
				$(c.target).each(function(i){
					
					temp.push(this);
					if(i % c.row == (c.row-1)){
						sets.push(temp);
						temp = [];
					}
				});
				if(temp.length){
					sets.push(temp);
				}
				$.each(sets, function(){
					$.library.flatheights(this);
				});
			}else{
				$.library.flatheights(c.target);
			}
		},
		flatheights: function(target,options){
			var c = $.extend({
				handlers : [],
				interval : 1000,
				currentSize: 0
			}, options);
			
			
			var ins = $('<ins>M</ins>').css({
				display: 'block',
				visibility: 'hidden',
				position: 'absolute',
				padding: '0',
				top: '0'
			});
			
			var isChanged = function() {
				ins.appendTo('body');
				var size = ins[0].offsetHeight;
				ins.remove();
				if (c.currentSize == size) return false;
				c.currentSize = size;
				return true;
			};
			
			$(isChanged);
			
			var observer = function() {
				if (!isChanged()) return;
				$.each(c.handlers, function(i, handler) {
					handler();
				});
			};
			
			c.addHandler = function(func) {
				c.handlers.push(func);
				if (c.handlers.length == 1) {
					setInterval(observer, c.interval);
				}
			};
			
			var sets = [];
			
			function flat(set){
				var maxHeight = 0;
				$(set).each(function(){
					var height = $(this).height();
					if (height > maxHeight) maxHeight = height;
				});
				$(set).css('height', maxHeight + 'px');
			}
			
			if($(target).length > 1){
				flat($(target));
				sets.push($(target));
			}
			
			c.addHandler(function(){
				$.each(sets, function(){
					$(this).height('auto');
					flat($(this));
				});
			});
		},
		boxhover: function(options){
			var c = $.extend({
				target    : '',
				addclass  : 'hover',
				linkclass : 'location'
			}, options);
			
			if(c.target != ''){
				$(c.target).each(function(){
					$(this).removeClass(c.addclass);
					$(this).css('cursor','pointer');
					if($(this).find('a').hasClass(c.linkclass)){
						var Url = $(this).find('a.'+c.linkclass).attr('href');
						$(this).hover(function(){
							$(this).addClass(c.addclass);
						},function(){
							$(this).removeClass(c.addclass);
						});
						$(this).click(function(){
							if($(this).find('a.'+c.linkclass).attr('target') == '_blank'){
								window.open(Url,'_blank');
							}else{
								location.href = Url;
							}
							return false;
						});
					}
				});
			}
		},
		tab: function(options){
			var c = $.extend({
				navigation : '',
				target     : '',
				active     : '',
				addclass   : 'active',
				duration   : '1000',
				easing     : 'linear',
				type       : 'text'
			}, options);
			
			if(c.navigation != '' && c.target != ''){
				var TargetHeight = [];
				
				$(c.target).wrapAll('<div class="tab-wrap-'+ $(c.target).attr('class') +'"></div>');
				$(c.target).parent().css('position','relative');
				var Position = $(c.target).position();
				
				$(c.target).each(function(){
					TargetHeight[$(this).attr('id')] = $(this).outerHeight('margin:true');
					$(this).css({
						'overflow' : 'hidden',
						'position' : 'absolute',
						'top'      : Position.top,
						'left'     : Position.left
					})
				});
				
				var flag = 0;
				$(c.navigation).click(function(){
					var TargeBlock = $(this).attr('class');
					$(c.target).stop().animate({opacity: 0.0},{duration:c.duration, easing:c.easing, complete:function(){
							$(this).hide();
						}
					});
					if(c.type == 'img'){
						$(c.navigation).find('img').removeClass(c.addclass);
						$(this).find('img').addClass(c.addclass);
						
						$(c.navigation).find('img').each(function(){
							if(!$(this).hasClass(c.addclass)){
								$(this).attr('src',$(this).attr('src').replace(/_on/i,""));
							}else{
								if(flag == 0){
									var dot = $(this).attr('src').lastIndexOf('.');
									var imgsrc_ro = $(this).attr('src').substr(0, dot) + '_on' + $(this).attr('src').substr(dot, 4);
									$(this).attr('src',imgsrc_ro).addClass(c.addclass);
								}
							}
						});
					}else if(c.type == 'text'){
						$(c.navigation).find('a').removeClass(c.addclass);
						$(c.navigation+'.'+TargeBlock).find('a').addClass(c.addclass);
					}
					
					$('#'+TargeBlock).show().stop().animate({opacity: '1.0'},{duration:c.duration, easing:c.easing});
					$(c.target).parent().stop().animate({'height':TargetHeight[TargeBlock]},{duration:c.duration, easing:c.easing});
					
					flag = 1;
					return false;
				});
				if(c.active != ''){
					$(c.navigation+'.'+c.active).click();
				}else{
					$(c.navigation+':first').click();
				}
			}
		},
		accNavi: function(options){
			var c = $.extend({
				target    : '',
				group     : '',
				duration  : 400,
				easing    : 'easeInOutCubic'
			}, options);
			if(c.target != ''){
				$(c.target).each(function(){
						$(this).hover(function(){
								$(this).find(c.group+":not(:animated)").animate({height: "show"}, c.duration , c.easing);
						},function(){
								$(this).find(c.group).animate({height: "hide"}, c.duration , c.easing);
						});
				});
			}
		}
	};
	
	$(function(){
		$.library.rollover();
		$.library.scroll();
		$.library.inputfocus();
		$.library.accNavi({target:'#Header ul#GlobalNavi li.acc',group:'.sub'});
	});
})(jQuery);