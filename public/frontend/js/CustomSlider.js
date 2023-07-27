"use strict";

function CustomSlider(args)
{
    // PROPERTIES

    // Arguments

    // General
    this.sliderId = args.sliderId;
    this.displayTime = typeof args.displayTime !== 'undefined' ? args.displayTime : 5000; // Display time of a slide (in milliseconds)
    this.transitionEffect = typeof args.transitionEffect !== 'undefined' ? args.transitionEffect.toLowerCase() : "push"; // Slides transition effect
    this.transitionDuration = typeof args.transitionDuration !== 'undefined' ? args.transitionDuration : (this.transitionEffect.toLowerCase() == "push" ? 0.7 : 0.6); // Duration in seconds of the transition effect
    this.pauseOnHover = typeof args.pauseOnHover !== 'undefined' ? args.pauseOnHover : true; // Indicates if the slideshow will pause when the mouse pointer is over the slider
    this.autoStart = typeof args.autoStart !== 'undefined' ? args.autoStart : true;
    this.useSwipe = typeof args.useSwipe !== 'undefined' ? args.useSwipe : true; // Indicates if the swipe gesture must be supported
    // Style of the prev/next buttons
    this.sideBtnAreaWidth = typeof args.sideBtnAreaWidth !== 'undefined' ? args.sideBtnAreaWidth : "10%"; // The width of the clickable area of the prev/next buttons. Also the width of the gradient background behind these buttons 
    this.sideBtnGradientBG = typeof args.sideBtnGradientBG !== 'undefined' ? args.sideBtnGradientBG : false; // Show a gradient background behind the prev/next buttons
    this.sideBtnOpacity = typeof args.sideBtnOpacity !== 'undefined' ? args.sideBtnOpacity : "0.5"; // Opacity level of the prev/next buttons when the mouse is not over them
    this.sideBtnHoverOpacity = typeof args.sideBtnHoverOpacity !== 'undefined' ? args.sideBtnHoverOpacity : "0.85"; // Opacity level of the prev/next buttons when the mouse is over them
    this.sideBtnTransitionDuration = typeof args.sideBtnTransitionDuration !== 'undefined' ? args.sideBtnTransitionDuration : 0.15; // Duration of the transition effect of the opacity level when the mouse is over or out of the prev/next buttons
    this.sideBtnArrowColor = typeof args.sideBtnArrowColor !== 'undefined' ? args.sideBtnArrowColor : "#fff"; // Color of the arrows in the prev/next buttons
    this.sideBtnArrowHeight = typeof args.sideBtnArrowHeight !== 'undefined' ? args.sideBtnArrowHeight : 20; // Height in pixels of the arrows
    this.sideBtnArrowWidth = typeof args.sideBtnArrowWidth !== 'undefined' ? args.sideBtnArrowWidth : 10; // Width in pixels of the arrows
    this.sideBtnArrowStrokeWidth = typeof args.sideBtnArrowStrokeWidth !== 'undefined' ? args.sideBtnArrowStrokeWidth : 4; // Width in pixels of the stroke that draws the arrows
    this.sideBtnBG = typeof args.sideBtnBG !== 'undefined' ? args.sideBtnBG.toLowerCase() : "none"; // Indicates the figure that is behind the arrows: 'none', 'circle', 'rect' (rectangle)
    this.sideBtnBGwidth = typeof args.sideBtnBGwidth !== 'undefined' ? args.sideBtnBGwidth : 32; // The width of the figure behind the arrows
    this.sideBtnBGheight = typeof args.sideBtnBGheight !== 'undefined' ? (this.sideBtnBG == "circle" ? this.sideBtnBGwidth : args.sideBtnBGheight) : 42; // The height of the rectangle behind the arrows (sideBtnBG = 'rect')
    this.sideBtnBGfilled = typeof args.sideBtnBGfilled !== 'undefined' ? args.sideBtnBGfilled : true; // Indicates whether the figure behind the arrows is filled or not
    this.sideBtnBGcolor = typeof args.sideBtnBGcolor !== 'undefined' ? args.sideBtnBGcolor : "#000"; // The fill color of the figure behind the arrows
    this.sideBtnBGborderRadius = typeof args.sideBtnBGborderRadius !== 'undefined' ? args.sideBtnBGborderRadius : 4; // The radius of curvature of the corners when sideBtnBG = 'rect'
    this.sideBtnBGborderWidth = typeof args.sideBtnBGborderWidth !== 'undefined' ? args.sideBtnBGborderWidth : 0; // The border width in pixels of the figure behind the arrows
    this.sideBtnBGborderColor = typeof args.sideBtnBGborderColor !== 'undefined' ? args.sideBtnBGborderColor : "#fff"; // The border color of the figure behind the arrows
    this.sideBtnHasShadow = typeof args.sideBtnHasShadow !== 'undefined' ? args.sideBtnHasShadow : false; // Indicates if the arrow and the figure behind will have a shadow
    this.sideBtnShadowDeviation = typeof args.sideBtnShadowDeviation !== 'undefined' ? args.sideBtnShadowDeviation : 2; // The blur deviation of the shadow
    this.sideBtnShadowOffsetX = typeof args.sideBtnShadowOffsetX !== 'undefined' ? args.sideBtnShadowOffsetX : 2; // Position of the shadow in the x-axis
    this.sideBtnShadowOffsetY = typeof args.sideBtnShadowOffsetY !== 'undefined' ? args.sideBtnShadowOffsetY : 2; // Position of the shadow in the y-axis
    this.sideBtnShadowOpacity = typeof args.sideBtnShadowOpacity !== 'undefined' ? args.sideBtnShadowOpacity : 0.4; // The opacity level of the shadow
    // Style of the navigation buttons
    this.controlColor = typeof args.controlColor !== 'undefined' ? args.controlColor : "#d9d9d9"; // The color of the navigation buttons
    this.controlHeight = typeof args.controlHeight !== 'undefined' ? args.controlHeight : 11; // The size in pixels of the navigation buttons
    this.controlSeparation = typeof args.controlSeparation !== 'undefined' ? args.controlSeparation : 12; // The distance (in pixels) between the navigation buttons
    this.controlBorderWidth = typeof args.controlBorderWidth !== 'undefined' ? args.controlBorderWidth : 0; // The border width in pixels of the navigation buttons
    this.controlBorderColor = typeof args.controlBorderColor !== 'undefined' ? args.controlBorderColor : "#000"; // The border color of the navigation buttons
    this.activeControlColor = typeof args.activeControlColor !== 'undefined' ? args.activeControlColor : "#878787"; // The color of the button that is related to the current (active) slide
    this.activeControlBorderColor = typeof args.activeControlBorderColor !== 'undefined' ? args.activeControlBorderColor : this.controlBorderColor; // The border color of the button that is related to the current (active) slide
    this.controlsVerticalPosition = typeof args.controlsVerticalPosition !== 'undefined' ? args.controlsVerticalPosition.toLowerCase() : "inside"; // Indicates whether the navigation buttons will appear 'inside' or 'under' (below) the slides
    this.controlsBottomDistance = typeof args.controlsBottomDistance !== 'undefined' ? args.controlsBottomDistance.toLowerCase() : "5%"; // Separation between the navigation buttons and the bottom border of the slides
    this.controlsTopDistance = typeof args.controlsTopDistance !== 'undefined' ? args.controlsTopDistance.toLowerCase() : "12px"; // Separation between the bottom border of the slides and the navigation buttons
    this.controlsShadow = typeof args.controlsShadow !== 'undefined' ? args.controlsShadow.toLowerCase() : "none"; // Sets a shadow effect on the navigation buttons
    this.controlsShadowDeviation = typeof args.controlsShadowDeviation !== 'undefined' ? args.controlsShadowDeviation : 1; // The blur deviation of the shadow
    this.controlsShadowOffsetX = typeof args.controlsShadowOffsetX !== 'undefined' ? args.controlsShadowOffsetX : 1; // Position of the shadow in the x-axis
    this.controlsShadowOffsetY = typeof args.controlsShadowOffsetY !== 'undefined' ? args.controlsShadowOffsetY : 1; // Position of the shadow in the y-axis
    this.controlsShadowOpacity = typeof args.controlsShadowOpacity !== 'undefined' ? args.controlsShadowOpacity : 0.4; // Opacity level of the shadow

    // Slider elements
    this.container = document.getElementById(this.sliderId);
    this.wrapper = this.container.querySelector(".cs-wrapper"); // Slides group
    this.prevBtn = this.container.querySelector(".cs-prev");
    this.nextBtn = this.container.querySelector(".cs-next");
    this.controls = this.container.querySelector(".cs-controls"); // Navigation buttons (including play/pause button)

    // Read-only
    Object.defineProperty(this, 'numSlides', { // Number of slides
        value: this.wrapper.childElementCount,
        writable: false
    });
    Object.defineProperty(this, 'useClonedSlides', { // The transition effect 'push' requires 2 cloned slides
        value: this.transitionEffect == "push",
        writable: false
    });
    Object.defineProperty(this, 'hasPrevBtn', {
        value: this.prevBtn != null,
        writable: false
    });
    Object.defineProperty(this, 'hasNextBtn', {
        value: this.nextBtn != null,
        writable: false
    });
    Object.defineProperty(this, 'hasControls', { // Slider has navigation buttons
        value: this.controls != null,
        writable: false
    });

    // Slider elements
    this.spots = this.hasControls ? this.controls.querySelectorAll("ul li:not(.cs-toggle)") : null; // Navigation buttons (excluding play/pause)
    this.playPauseBtn = this.hasControls ? this.controls.querySelector("ul li.cs-toggle") : null;
    
    // Read-only
    Object.defineProperty(this, 'hasSpots', { // Indicates if there are buttons that lead directly to a specific slide
        value: this.spots != null,
        writable: false
    });
    Object.defineProperty(this, 'hasPlayPauseButton', {
        value: this.playPauseBtn != null,
        writable: false
    });
    Object.defineProperty(this, 'sideBtnFramed', { // Indicates if the prev/next buttons have a figure behind the arrow
        value: this.sideBtnBG != "none",
        writable: false
    });
    Object.defineProperty(this, 'sideBtnWidth', { // The width of the arrow or the figure behind it
        value: this.getSideBtnWidth(),
        writable: false
    });
    Object.defineProperty(this, 'sideBtnHeight', { // The height of the arrow or the figure behind it
        value: this.getSideBtnHeight(),
        writable: false
    });
    Object.defineProperty(this, 'spotWidth', { // Width of the navigation buttons
        value: this.getSpotWidth(),
        writable: false
    });
    Object.defineProperty(this, 'controlsHaveShadow', { // Indicates if the navigation buttons have a shadow
        value: this.controlsShadow != "none",
        writable: false
    });

    // Variables
    this.activeSlideIndex = 0 // The index of the current slide
    this.playing = this.autoStart; // Indicates if the slideshow is playing automatically
    this.intervalId = -1; // Used by the transition intervals

    // Constants
    this.svgURI = "http://www.w3.org/2000/svg";
    this.controlsShadowFilterId = "csControlsShadow";
    this.sideBtnShadowFilterId = "csSideBtnShadow";
    var transformNames = ["transform", "webkitTransform", "msTransform", "mozTransform", "oTransform"];
    this.transformProperty = this.getSupportedPropertyName(transformNames); // Gets the name of the css transform property in the current browser

    // Prev/next buttons clickable area width
    if (this.hasPrevBtn) {
        this.prevBtn.style.width = this.sideBtnAreaWidth;
    }
    if (this.hasNextBtn) {
        this.nextBtn.style.width = this.sideBtnAreaWidth;
    }

    // Set prev/next buttons gradient background
    if (this.sideBtnGradientBG) {
        if (this.hasPrevBtn) {
            this.prevBtn.classList.add('cs-prevBG');
        }
        if (this.hasNextBtn) {
            this.nextBtn.classList.add('cs-nextBG');
        }
    }

    // Rearrange slider elements when navigation buttons must be displayed below the slides
    if (this.controlsVerticalPosition == "under") {
        var sliderDiv = document.createElement("div");
        sliderDiv.style.position = "relative";
        this.container.insertBefore(sliderDiv, this.wrapper);
        sliderDiv.appendChild(this.wrapper);
        if (this.hasPrevBtn) {
            sliderDiv.appendChild(this.prevBtn);
        }
        if (this.hasNextBtn) {
            sliderDiv.appendChild(this.nextBtn);
        }
        if (this.hasControls) {
            this.controls.style.position = "relative";
            this.controls.style.paddingTop = this.controlsTopDistance;
        }
    }
    else {
        if (this.hasControls) {
            this.controls.style.bottom = this.controlsBottomDistance; // Sets the separation between the navigation buttons and the bottom border of the slides
        }
    }

    var slides = this.wrapper.children;
    if (this.useClonedSlides) {
        // Clone the first and last slides
        var firstSlide = slides[0];
        var firstSlideClone = firstSlide.cloneNode(true);
        var lastSlide = slides[this.numSlides - 1];
        var lastSlideClone = lastSlide.cloneNode(true);
        // Add the first slide clone at the end
        this.wrapper.appendChild(firstSlideClone);
        // Add the last slide clone at the beginning
        this.wrapper.insertBefore(lastSlideClone, firstSlide);

        // Set the 'push' transition effect
        this.wrapper.style.transition = "transform " + this.transitionDuration + "s ease-in-out";
        this.wrapper.style.webkitTransition = "-webkit-transform " + this.transitionDuration + "s ease-in-out";
        this.wrapper.style.oTransition = "-o-transform " + this.transitionDuration + "s ease-in-out";
    }
    for (var i = 0; i < this.wrapper.children.length; i++) {
        // Set the slides position and visibility
        var slide = slides[i];
        if (this.useClonedSlides) { // Push transition
            slide.style.left = (100 * i) + "%";
        }
        else { // Fade transition
            slide.style.left = "100%";
            if (i == 0) {
                slide.style.zIndex = "50";
            }
            else {
                slide.style.opacity = "0";
                slide.style.zIndex = "0";
            }
            slide.style.transition = "opacity " + this.transitionDuration + "s linear"; // 'fade' transition effect
        }
    }
    
    // Add shadow filter for prev/next buttons
    if (this.sideBtnHasShadow && (this.hasNextBtn || this.hasPrevBtn)) {
        var shadowFilter = this.createShadowFilter(this.sideBtnShadowFilterId, this.sideBtnShadowDeviation, this.sideBtnShadowOffsetX, this.sideBtnShadowOffsetY);
        this.container.appendChild(shadowFilter);
    }
    // Create prev/next buttons
    if (this.hasPrevBtn) {
        this.createSideBtn(this.prevBtn, true);
        setSideBtnListeners(this.prevBtn, -1);
    }
    if (this.hasNextBtn) {
        this.createSideBtn(this.nextBtn, false);
        setSideBtnListeners(this.nextBtn, 1);
    }

    // Add shadow filter for navigation buttons
    if (this.hasControls && this.controlsHaveShadow) {
        var shadowFilter = this.createShadowFilter(this.controlsShadowFilterId, this.controlsShadowDeviation, this.controlsShadowOffsetX, this.controlsShadowOffsetY);
        this.container.appendChild(shadowFilter);
    }
    // Create navigation buttons
    if (this.hasSpots) {
        // Set index, active state and behavior for slider spots
        for (var i = 0; i < this.spots.length; i++) {
            var spot = this.spots[i];
            spot.setAttribute("data-index", i);
            var activeSpot = i == 0 ? true : false;
            spot.style.marginLeft = i == 0 ? "0px" : this.controlSeparation + "px";
            spot.appendChild(this.createSpotSVG(activeSpot));
            spot.addEventListener("click", spotClicked);
        }
    }
    if (this.hasPlayPauseButton) {
        // Create play/pause button
        this.createPlayIcon();
        this.createPauseIcon();
        if (this.playing) {
            this.playIcon.style.display = "none";
        }
        else {
            this.pauseIcon.style.display = "none";
        }
        if (this.hasSpots) {
            this.playPauseBtn.style.marginLeft = this.controlSeparation + "px";
        }
        this.playPauseBtn.addEventListener("click", togglePlayPause);
    }

    var slider = this;

    // 'Swipe' support (touch gesture)
    var tsx, tmx; // touch star position, touch movement position
    tsx = tmx = 0;
    if (this.useSwipe && this.useClonedSlides) { // If swipe gesture is supported and 'push' effect is selected
        this.wrapper.addEventListener("touchstart", swipeStart);
        this.wrapper.addEventListener("touchmove", swipeMove);
        this.wrapper.addEventListener("touchend", swipeEnd);
    }
    // Swipe gesture starts
    function swipeStart(e) {
        var t = e.touches[0];
        tsx = t.screenX;
        pauseSlider();
    }
    // Swipe gesture is taking place
    function swipeMove(e) {
        var t = e.touches[0];
        tmx = t.screenX;
        var mov = ((tmx - tsx) / slider.container.offsetWidth) * 100; // get displacement
        var newPos = ((slider.activeSlideIndex + 1) * -100) + mov;
        slider.changeWithoutTransition(slider.wrapper, slider.transformProperty, 'translate3d(' + newPos + '%, 0, 0)'); // set new position
    }
    // Swipe gesture ends
    function swipeEnd() {
        var mov = ((tmx - tsx) / slider.container.offsetWidth) * 100; // get displacement
        if (Math.abs(mov) < 25) {
            slider.changeSlide(0); // don't change slide if the displacement is less than 25%
        }
        else if (mov > 0) {
            slider.changeSlide(-1); // Displacement to the left. Go to previous slide
        }
        else { // Displacement to the right. Go to the next slide
            slider.changeSlide(1);
        }
    }

    // Start slideshow
    if (this.autoStart) {
        this.startTimer();
        setPauseOnHover();
    }
    
    // Set behavior when mouse is over the slides
    function setPauseOnHover()
    {
        if (slider.pauseOnHover) {
            slider.wrapper.addEventListener("mouseenter", pauseSlider);
            slider.wrapper.addEventListener("mouseleave", playSlider);
        }
    }

    // Pause slideshow
    function pauseSlider()
    {
        clearInterval(slider.intervalId);
    }

    // Start slideshow
    function playSlider()
    {
        slider.startTimer();
    }

    // Navigation button clicked
    function spotClicked(e)
    {
        var nextIndex = parseInt(e.currentTarget.getAttribute("data-index"));
        if (nextIndex == slider.activeSlideIndex) {
            return false;
        }
        var direction = nextIndex - slider.activeSlideIndex;
        slider.changeSlide(direction);
    }

    // Play/pause button clicked
    function togglePlayPause()
    {
        if (slider.playing) {
            slider.playing = false;
            clearInterval(slider.intervalId);
            if (slider.pauseOnHover) {
                slider.wrapper.removeEventListener("mouseenter", pauseSlider);
                slider.wrapper.removeEventListener("mouseleave", playSlider);
            }
            slider.playIcon.style.display = "inline";
            slider.pauseIcon.style.display = "none";
        }
        else {
            slider.playing = true;
            setPauseOnHover();
            slider.playIcon.style.display = "none";
            slider.pauseIcon.style.display = "inline";
            slider.startTimer();
        }
    }

    // Prev/next buttons behavior
    function setSideBtnListeners(sideBtn, direction)
    {
        sideBtn.addEventListener("click", function () { slider.changeSlide(direction); });
        sideBtn.addEventListener("mouseenter", function () { sideBtn.style.opacity = slider.sideBtnHoverOpacity });
        sideBtn.addEventListener("mouseleave", function () { sideBtn.style.opacity = slider.sideBtnOpacity });
    }

    // Caption box responsive behavior

    window.addEventListener("resize", adjustCaption);
    var captionWidth, captionLeft, captionRight, controlsBottom;
    adjustCaption();

    function adjustCaption()
    {
        var captions = document.querySelectorAll("#" + slider.sliderId + " .cs-caption");
        if (captions.length > 0) {
            if (typeof captionWidth == "undefined") {
                // Get caption initial values (CSS values)
                captionWidth = captions[0].style.width;
                captionLeft = captions[0].style.left;
                captionRight = captions[0].style.right;
            }
            if (slider.container.offsetWidth < 700) {
                // Put caption below the slides
                for (var i = 0; i < captions.length; i++) {
                    captions[i].style.cssText = "position:relative;width:auto;left:0;right:auto";
                }
                setTimeout(resizeCaptions, 300); // Check resize of the slider
            }
            else {
                // Put caption over the slide
                for (var i = 0; i < captions.length; i++) {
                    captions[i].style.cssText = "position:absolute;height:auto;width:" + captionWidth + ";left:" + captionLeft + ";right:" + captionRight;
                    if (slider.hasControls) {
                        slider.controls.style.paddingBottom = "0";
                    }
                }
            }
        }

        // In small displays, sets the height of the captions and the position of the navigation buttons
        function resizeCaptions()
        {
            if (slider.container.offsetWidth < 700) {
                // Get the height of the tallest caption
                var capMaxHeight = 0;
                for (var i = 0; i < captions.length; i++) {
                    capMaxHeight = Math.max(getCSSnumber(captions[i], 'height'), capMaxHeight);
                }
                // Set the same height for all the captions
                for (var i = 0; i < captions.length; i++) {
                    captions[i].style.cssText += ";height:" + capMaxHeight + "px";
                }
                // Set position of the navigation buttons
                if (slider.hasControls) {
                    var controlsPaddingBottom = getCSSnumber(captions[0], 'padding-top') + capMaxHeight + getCSSnumber(captions[0], 'padding-bottom');
                    slider.controls.style.paddingBottom = controlsPaddingBottom + "px";
                }
            }
        }

        // Get a CSS property value
        function getCSSnumber(elem, prop)
        {
            var cssValue = window.getComputedStyle(elem, null).getPropertyValue(prop);
            var numValue = cssValue.substr(0, cssValue.length - 2);
            return parseInt("" + numValue);
        }
    }
}

// Start slideshow
CustomSlider.prototype.startTimer = function ()
{
    if (this.playing) {
        clearInterval(this.intervalId);
        var slider = this;
        this.intervalId = setInterval(function () {
            slider.changeSlide(1);
        }, this.displayTime);
    }
}

// Shows a different slide
CustomSlider.prototype.changeSlide = function(direction)
{
    this.startTimer();
    var slides = this.wrapper.children;
    var activeElementIndex = this.useClonedSlides ? this.activeSlideIndex + 1 : this.activeSlideIndex;
    var activeSlide = slides[activeElementIndex];
    var useFade = !this.useClonedSlides;
    if (useFade) { // Fade transition effect
        activeSlide.style.opacity = "0";
        activeSlide.style.zIndex = "0";
    }
    var nextIndex = this.activeSlideIndex + direction;
    if (nextIndex < 0) { // The first slide is the active slide and the left button is clicked. The last slide must be shown
        if (!useFade) {
            var transformValue = 'translate3d(' + (-100 * (this.numSlides + 1)) + '%, 0, 0)';
            this.changeWithoutTransition(this.wrapper, this.transformProperty, transformValue); // Position adjustments must not be animated
        }
        nextIndex = this.numSlides - 1;
    }
    else if (nextIndex >= this.numSlides) { // The last slide is the active slide and the right button is clicked. The first slide must be shown
        if (!useFade) {
            this.changeWithoutTransition(this.wrapper, this.transformProperty, 'translate3d(0%, 0, 0)'); // Position adjustments must not be animated
        }
        nextIndex = 0;
    }
    var nextActiveElementIndex = this.useClonedSlides ? nextIndex + 1 : nextIndex;
    var nextActiveSlide = slides[nextActiveElementIndex];
    // Transition effects
    if (useFade) {
        nextActiveSlide.style.zIndex = "50";
        nextActiveSlide.style.opacity = "1";
    }
    else {
        var transformValue = 'translate3d(' + ((nextIndex + 1) * -100) + '%, 0, 0)';
        this.wrapper.style[this.transformProperty] = transformValue;
    }
    // Change the active navigation button
    if (this.hasSpots) {
        var activeSpot = this.spots[this.activeSlideIndex];
        var activeSpotCircle = activeSpot.firstElementChild.firstElementChild;
        activeSpotCircle.style.fill = this.controlsHaveShadow && this.controlsShadow != "drop" ? "url(#csSpotFill)" : this.controlColor;
        activeSpotCircle.style.stroke = this.controlBorderColor;
        var nextActiveSpot = this.spots[nextIndex];
        var nextActiveSpotCircle = nextActiveSpot.firstElementChild.firstElementChild;
        nextActiveSpotCircle.style.fill = this.activeControlColor;
        nextActiveSpotCircle.style.stroke = this.activeControlBorderColor;
    }
    this.activeSlideIndex = nextIndex;
}

// Avoids a CSS transition effect
CustomSlider.prototype.changeWithoutTransition = function(element, prop, value)
{
    element.classList.add('cs-notransition');
    element.style[prop] = value;
    element.offsetHeight; // Trigger a reflow, flushing the CSS changes
    element.classList.remove('cs-notransition');
}

//  Gets the name of a CSS property supported in the current browser
CustomSlider.prototype.getSupportedPropertyName = function(properties)
{
    for (var i = 0; i < properties.length; i++) {
        if (typeof document.body.style[properties[i]] != "undefined") {
            return properties[i];
        }
    }
    return null;
}

// Gets the width of the arrow or figure of the prev/next buttons
CustomSlider.prototype.getSideBtnWidth = function ()
{
    if (this.sideBtnFramed) {
        return this.sideBtnBGwidth + this.sideBtnBGborderWidth;
    }
    else {
        return this.sideBtnArrowWidth + this.sideBtnArrowStrokeWidth;
    }
}

// Gets the height of the arrow or figure of the prev/next buttons
CustomSlider.prototype.getSideBtnHeight = function()
{
    if (this.sideBtnFramed) {
        return this.sideBtnBGheight + this.sideBtnBGborderWidth;
    }
    else {
        return this.sideBtnArrowHeight + this.sideBtnArrowStrokeWidth;
    }
}

// Creates the arrow and figure of the prev/next buttons and sets the opacity transition effect
CustomSlider.prototype.createSideBtn = function(sideBtn, isLeft)
{
    sideBtn.appendChild(this.createSideBtnSVG(isLeft));
    sideBtn.style.opacity = this.sideBtnOpacity;
    if (this.sideBtnTransitionDuration > 0) {
        sideBtn.style.transition = "opacity " + this.sideBtnTransitionDuration + "s linear";
    }
}

// Draws the arrow and figure of the prev/next buttons
CustomSlider.prototype.createSideBtnSVG = function(isLeft)
{
    var sideBtnSVG = this.createSVG("svg", { width: this.sideBtnWidth + "px", height: this.sideBtnHeight + "px" });
    var group = this.createSVG("g", {});
    var arrowMarginLeft = 0;
    var arrowMarginTop = 0;
    // Draw the circle or rectangle figure
    if (this.sideBtnFramed) {
        var bg = document.createElementNS(this.svgURI, this.sideBtnBG);
        if (this.sideBtnBG == "circle") {
            var radius = this.sideBtnBGwidth / 2;
            var center = radius + (this.sideBtnBGborderWidth / 2);
            bg.setAttribute("cx", center);
            bg.setAttribute("cy", center);
            bg.setAttribute("r", radius);
        }
        else { // this.sideBtnBG == "rect"
            var xy = this.sideBtnBGborderWidth / 2;
            bg.setAttribute("x", xy);
            bg.setAttribute("y", xy);
            bg.setAttribute("width", this.sideBtnBGwidth);
            bg.setAttribute("height", this.sideBtnBGheight);
            bg.setAttribute("rx", this.sideBtnBGborderRadius);
            bg.setAttribute("ry", this.sideBtnBGborderRadius);
        }
        // Fill the figure
        var fill = this.sideBtnBGfilled ? this.sideBtnBGcolor : "none";
        bg.style.cssText = "fill:" + fill + ";stroke-width:" + this.sideBtnBGborderWidth + ";stroke:" + this.sideBtnBGborderColor;
        group.appendChild(bg);
        // Get arrow margins
        arrowMarginLeft = ((this.sideBtnBGwidth + this.sideBtnBGborderWidth) - (this.sideBtnArrowWidth + this.sideBtnArrowStrokeWidth)) / 2;
        arrowMarginTop = ((this.sideBtnBGheight + this.sideBtnBGborderWidth) - (this.sideBtnArrowHeight + this.sideBtnArrowStrokeWidth)) / 2;
    }
    // Draw the arrow and set the position of the arrow and figure
    var arrow = document.createElementNS(this.svgURI, "polyline");
    var halfStrokeWidth = this.sideBtnArrowStrokeWidth / 2;
    var pl = arrowMarginLeft + halfStrokeWidth;
    var pt = arrowMarginTop + halfStrokeWidth;
    var pr = arrowMarginLeft + this.sideBtnArrowWidth + halfStrokeWidth;
    var pb = arrowMarginTop + this.sideBtnArrowHeight + halfStrokeWidth;
    var pm = arrowMarginTop + (this.sideBtnArrowHeight / 2) + halfStrokeWidth;
    var svgMarginH = "-" + Math.round(this.sideBtnWidth / 2) + "px";
    if (isLeft) {
        arrow.setAttribute("points", pr + "," + pt + " " + pl + "," + pm + " " + pr + "," + pb);
        sideBtnSVG.style.left = "50%";
        sideBtnSVG.style.marginLeft = svgMarginH;
    }
    else { // Right button
        arrow.setAttribute("points", pl + "," + pt + " " + pr + "," + pm + " " + pl + "," + pb);
        sideBtnSVG.style.right = "50%";
        sideBtnSVG.style.marginRight = svgMarginH;
    }
    arrow.style.cssText = "fill:none;stroke-width:" + this.sideBtnArrowStrokeWidth + ";stroke:" + this.sideBtnArrowColor;
    sideBtnSVG.style.top = "50%";
    sideBtnSVG.style.marginTop = "-" + Math.round(this.sideBtnHeight / 2) + "px";
    group.appendChild(arrow);
    if (this.sideBtnHasShadow) {
        group.setAttribute("filter", "url(#" + this.sideBtnShadowFilterId + ")");
    }
    sideBtnSVG.appendChild(group);
    return sideBtnSVG;
}

// Gets the Width of the navigation buttons
CustomSlider.prototype.getSpotWidth = function()
{
    return this.controlHeight + this.controlBorderWidth;
}

// Draws a navigation button
CustomSlider.prototype.createSpotSVG = function (active)
{
    var spotSVG = this.createSVG("svg", { width: this.spotWidth + "px", height: this.spotWidth + "px" });
    var radius = this.controlHeight / 2;
    var center = radius + (this.controlBorderWidth / 2);
    var circle = this.createSVG("circle", { cx: center, cy: center, r: radius });
    var fill = active ? this.activeControlColor : this.controlColor;
    // Add shadow
    if (this.controlsHaveShadow) {
        if (this.controlsShadow == "drop") {
            circle.setAttribute("filter", "url(#" + this.controlsShadowFilterId + ")");
        }
        else if (!active) {
            fill = "url(#csSpotFill)";
        }
    }
    // Fill the button
    var stroke = active ? this.activeControlBorderColor : this.controlBorderColor;
    circle.style.cssText = "fill:" + fill + ";stroke-width:" + this.controlBorderWidth + ";stroke:" + stroke;
    spotSVG.appendChild(circle);
    return spotSVG;
}

// Creates a SVG shadow filter
CustomSlider.prototype.createShadowFilter = function (filterId, stdDeviation, dx, dy)
{
    var svgFilter = this.createSVG("svg", { style: "float:left; width:0; height:0" });
    var filter = this.createSVG("filter", { id: filterId, width: "300%", height: "300%", x: "-100%", y: "-100%" });
    // Drop effect
    if (filterId == this.sideBtnShadowFilterId || this.controlsShadow == "drop") {
        var gb = this.createSVG("feGaussianBlur", { "in": "SourceAlpha", stdDeviation: stdDeviation });
        var offset = this.createSVG("feOffset", { dx: dx, dy: dy });
        var ct = this.createSVG("feComponentTransfer", {});
        var slope = filterId == this.sideBtnShadowFilterId ? this.sideBtnShadowOpacity : this.controlsShadowOpacity;
        var fa = this.createSVG("feFuncA", { type: "linear", slope: slope });
        ct.appendChild(fa);
        var merge = this.createSVG("feMerge", {});
        var mergeNode1 = this.createSVG("feMergeNode", {});
        var mergeNode2 = this.createSVG("feMergeNode", { "in": "SourceGraphic" });
        merge.appendChild(mergeNode1);
        merge.appendChild(mergeNode2);
        filter.appendChild(gb);
        filter.appendChild(offset);
        filter.appendChild(ct);
        filter.appendChild(merge);
    }
    else if (filterId == this.controlsShadowFilterId) { // Shadow inside the navigation buttons
        var extra = stdDeviation * 4;
        var gb = this.createSVG("feGaussianBlur", { "in": "SourceGraphic", stdDeviation: stdDeviation });
        var offset = this.createSVG("feOffset", { dx: dx, dy: dy });
        filter.appendChild(gb);
        filter.appendChild(offset);
        var radius = this.controlHeight / 2;
        var center = radius + (this.controlBorderWidth / 2);
        var bgRadius = radius + extra;
        var patternSize = bgRadius * 2;

        // Shadow figure for navigation button (circle button)
        var patternSpot = this.createSVG("pattern", { id: "csSpotFill", width: patternSize, height: patternSize });
        var groupSpot = this.createSVG("g", { filter: "url(#" + filterId + ")" });
        var bgSpot = this.createSVG("circle", { cx: center, cy: center, r: bgRadius, fill: "#000" });
        groupSpot.appendChild(bgSpot);
        var circle = this.createSVG("circle", { cx: center, cy: center, r: radius, fill: this.controlColor });
        groupSpot.appendChild(circle);
        patternSpot.appendChild(groupSpot);

        // Shadow figure for 'play' icon
        var patternPlay = this.createSVG("pattern", { id: "csPlayFill", width: patternSize, height: patternSize });
        var groupPlay = this.createSVG("g", { filter: "url(#" + filterId + ")" });
        var halfBorder = this.controlBorderWidth / 2;
        var pl = halfBorder;
        var pt = halfBorder;
        var pr = this.spotWidth - halfBorder;
        var pb = this.spotWidth - halfBorder;
        var pm = (this.spotWidth / 2) - halfBorder;
        var bgTriangle = this.createSVG("polygon", { points: (pl - extra) + "," + (pt - extra) + " " + (pr + extra) + "," + pm + " " + (pl - extra) + "," + (pb + extra) });
        bgTriangle.style.cssText = "fill:#000;stroke-width:0";
        groupPlay.appendChild(bgTriangle);
        var triangle = this.createSVG("polygon", { points: pl + "," + pt + " " + pr + "," + pm + " " + pl + "," + pb });
        triangle.style.cssText = "stroke-width:0;fill:" + this.controlColor;
        groupPlay.appendChild(triangle);
        patternPlay.appendChild(groupPlay);

        // Shadow figure for 'pause' icon
        var patternPause = this.createSVG("pattern", { id: "csPauseFill", width: patternSize, height: patternSize });
        var groupPause = this.createSVG("g", { filter: "url(#" + filterId + ")" });
        var rectWidth = Math.round(this.controlHeight / 3);
        var halfBorder = this.controlBorderWidth / 2;
        var px1 = halfBorder;
        var py = halfBorder;
        var px2 = halfBorder + (this.controlHeight - rectWidth);
        var bgSize = this.controlHeight + (extra * 2);
        var bgRect = this.createSVG("rect", { x: px1 - extra, y: py - extra, width: bgSize, height: bgSize });
        bgRect.style.cssText = "fill:#000;stroke-width:0";
        groupPause.appendChild(bgRect);
        var rect1 = this.createSVG("rect", { x: px1, y: py, width: rectWidth, height: this.controlHeight });
        rect1.style.cssText = "stroke-width:0;fill:" + this.controlColor;
        groupPause.appendChild(rect1);
        var rect2 = this.createSVG("rect", { x: px2, y: py, width: rectWidth, height: this.controlHeight });
        rect2.style.cssText = "stroke-width:0;fill:" + this.controlColor;
        groupPause.appendChild(rect2);
        patternPause.appendChild(groupPause);

        svgFilter.appendChild(patternSpot);
        svgFilter.appendChild(patternPlay);
        svgFilter.appendChild(patternPause);
    }
    svgFilter.appendChild(filter);
    return svgFilter;
}

// Draws the 'play' icon
CustomSlider.prototype.createPlayIcon = function ()
{
    this.playIcon = this.createSVG("svg", { width: this.spotWidth + "px", height: this.spotWidth + "px" });
    var halfBorder = this.controlBorderWidth / 2;
    var pl = halfBorder;
    var pt = halfBorder;
    var pr, pb;
    pr = pb = this.spotWidth - halfBorder;
    var pm = (this.spotWidth / 2) - halfBorder;
    var triangle = this.createSVG("polygon", { points: pl + "," + pt + " " + pr + "," + pm + " " + pl + "," + pb });
    var fill = this.controlColor;
    // Shadow effect
    if (this.controlsHaveShadow) {
        if (this.controlsShadow == "drop") {
            triangle.setAttribute("filter", "url(#" + this.controlsShadowFilterId + ")");
        }
        else {
            fill = "url(#csPlayFill)";
        }
    }
    triangle.style.cssText = "fill:" + fill + ";stroke-width:" + this.controlBorderWidth + ";stroke:" + this.controlBorderColor;
    this.playIcon.appendChild(triangle);
    this.playPauseBtn.appendChild(this.playIcon);
}

// Draws the 'pause' icon
CustomSlider.prototype.createPauseIcon = function()
{
    this.pauseIcon = this.createSVG("svg", { width: this.spotWidth + "px", height: this.spotWidth + "px" });
    var group = this.createSVG("g", {});
    var rectWidth = Math.round(this.controlHeight / 3);
    var halfBorder = this.controlBorderWidth / 2;
    var px1 = halfBorder;
    var py = halfBorder;
    var rect1 = this.createSVG("rect", { x: px1, y: py, width: rectWidth, height: this.controlHeight });
    group.appendChild(rect1);
    var px2 = halfBorder + (this.controlHeight - rectWidth);
    var rect2 = this.createSVG("rect", { x: px2, y: py, width: rectWidth, height: this.controlHeight });
    var fill = this.controlColor;
    // Shadow effect
    if (this.controlsHaveShadow) {
        if (this.controlsShadow == "drop") {
            group.setAttribute("filter", "url(#" + this.controlsShadowFilterId + ")");
        }
        else {
            fill = "url(#csPauseFill)";
        }
    }
    this.pauseIcon.style.cssText = "fill:" + fill + ";stroke-width:" + this.controlBorderWidth + ";stroke:" + this.controlBorderColor;
    group.appendChild(rect2);
    this.pauseIcon.appendChild(group);
    this.playPauseBtn.appendChild(this.pauseIcon);
}

// Creates SVG element (polygon, rectangle)
CustomSlider.prototype.createSVG = function (type, attributes, fillColor)
{
    var elem = document.createElementNS(this.svgURI, type);
    // set attributes
    for (var key in attributes) {
        elem.setAttribute(key, attributes[key]);
    }
    if (typeof fillColor !== 'undefined') {
        elem.style.cssText = "fill:" + fillColor;
    }
    return elem;
}