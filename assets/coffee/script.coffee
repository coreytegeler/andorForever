$ ->
	transEnd = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd'
	$body = $('body')
	$curtain = $('#curtain')
	$stairs = $('#stairs')
	$body.on 'mousewheel', (e) ->
		if($stairs.is('.open'))
			return false
		y = parseInt($curtain.css('y')) - e.deltaY
		if y >= $(this).innerHeight()
			y = $(this).innerHeight()
		if y <= 0
			y = 0
		$curtain.transition
			y: y
		, 0

	$body.on 'click', '.stair a', (e) ->
		e.preventDefault()
		$project = $(this).parents('.project')
		if($project.is('.open'))
			$project.removeClass('open')
			$stairs.removeClass('open')
		else
			$project.addClass('open')
			$stairs.addClass('open')
			$curtain.css
				y: $(window).innerHeight()
			projectTop = $project.position().top
			$stairs.scrollTop(projectTop-30)
		