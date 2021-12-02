<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Scrollspy has been created as an extension of Bootstrap Scrollspy. Scrollspy is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/components/scrollspy/" target="_blank">documentation</a>.
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Scrollspy</strong><span class="small ms-1">Example in navbar</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-233" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-233" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-233">
                  <nav class="navbar navbar-light bg-light px-3" id="navbar-example2"><a class="navbar-brand" href="#">Navbar</a>
                     <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#fat">@fat</a></li>
                        <li class="nav-item"><a class="nav-link" href="#mdo">@mdo</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-coreui-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#one">one</a></li>
                              <li><a class="dropdown-item" href="#two">two</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#three">three</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
                  <div class="scrollspy-example" data-coreui-spy="scroll" data-coreui-target="#navbar-example2" data-coreui-offset="0" tabindex="0">
                     <h4 id="fat">@fat</h4>
                     <p>Placeholder content for the scrollspy example. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
                     <h4 id="mdo">@mdo</h4>
                     <p>Placeholder content for the scrollspy example. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk.</p>
                     <h4 id="one">one</h4>
                     <p>Placeholder content for the scrollspy example. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
                     <h4 id="two">two</h4>
                     <p>Placeholder content for the scrollspy example. It's time to bring out the big balloons. I'm walking, I'm walking on air (tonight). Yeah, we maxed our credit cards and got kicked out of the bar. Yo, shout out to all you kids, buying bottle service, with your rent money. I'm ma get your heart racing in my skin-tight jeans. If you get the chance you better keep her. Yo, shout out to all you kids, buying bottle service, with your rent money.</p>
                     <h4 id="three">three</h4>
                     <p>Placeholder content for the scrollspy example. If you wanna dance, if you want it all, you know that I'm the girl that you should call. Walk through the storm I would. So let me get you in your birthday suit. The one that got away. Last Friday night, yeah I think we broke the law, always say we're gonna stop. 'Cause she's a little bit of Yoko, And she's a little bit of 'Oh no'. I want the jaw droppin', eye poppin', head turnin', body shockin'. Yeah, we maxed our credit cards and got kicked out of the bar.</p>
                     <p>And some more placeholder content, for good measure.</p>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-233">
                  <script class="language-markup" type="text/plain">
                     <nav class="navbar navbar-light bg-light px-3" id="navbar-example2"><a class="navbar-brand" href="#">Navbar</a>
                        <ul class="nav nav-pills">
                          <li class="nav-item"><a class="nav-link active" href="#fat">@fat</a></li>
                          <li class="nav-item"><a class="nav-link" href="#mdo">@mdo</a></li>
                          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-coreui-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#one">one</a></li>
                              <li><a class="dropdown-item" href="#two">two</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#three">three</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                      <div class="scrollspy-example" data-coreui-spy="scroll" data-coreui-target="#navbar-example2" data-coreui-offset="0" tabindex="0">
                        <h4 id="fat">@fat</h4>
                        <p>Placeholder content for the scrollspy example. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
                        <h4 id="mdo">@mdo</h4>
                        <p>Placeholder content for the scrollspy example. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk.</p>
                        <h4 id="one">one</h4>
                        <p>Placeholder content for the scrollspy example. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
                        <h4 id="two">two</h4>
                        <p>Placeholder content for the scrollspy example. It's time to bring out the big balloons. I'm walking, I'm walking on air (tonight). Yeah, we maxed our credit cards and got kicked out of the bar. Yo, shout out to all you kids, buying bottle service, with your rent money. I'm ma get your heart racing in my skin-tight jeans. If you get the chance you better keep her. Yo, shout out to all you kids, buying bottle service, with your rent money.</p>
                        <h4 id="three">three</h4>
                        <p>Placeholder content for the scrollspy example. If you wanna dance, if you want it all, you know that I'm the girl that you should call. Walk through the storm I would. So let me get you in your birthday suit. The one that got away. Last Friday night, yeah I think we broke the law, always say we're gonna stop. 'Cause she's a little bit of Yoko, And she's a little bit of 'Oh no'. I want the jaw droppin', eye poppin', head turnin', body shockin'. Yeah, we maxed our credit cards and got kicked out of the bar.</p>
                        <p>And some more placeholder content, for good measure.</p>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Scrollspy</strong><span class="small ms-1"> Example with nested nav</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Scrollspy also works with nested <code>.nav</code>s. If a nested <code>.nav</code> is <code>.active</code>, its parents will also be <code>.active</code>. Scroll the area next to the navbar and watch the active class change.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-228" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-228" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-228">
                  <div class="row">
                     <div class="col-4">
                        <nav class="navbar navbar-light bg-light flex-column" id="navbar-example3"><a class="navbar-brand" href="#">Navbar</a>
                           <nav class="nav nav-pills flex-column"><a class="nav-link active" href="#item-1">Item 1</a>
                              <nav class="nav nav-pills flex-column"><a class="nav-link ms-3 my-1 active" href="#item-1-1">Item 1-1</a><a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a></nav><a class="nav-link" href="#item-2">Item 2</a><a class="nav-link" href="#item-3">Item 3</a>
                              <nav class="nav nav-pills flex-column"><a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a><a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a></nav>
                           </nav>
                        </nav>
                     </div>
                     <div class="col-8">
                        <div class="scrollspy-example-2" data-coreui-spy="scroll" data-coreui-target="#navbar-example3" data-coreui-offset="0" tabindex="0">
                           <h4 id="item-1">Item 1</h4>
                           <p>Placeholder content for the scrollspy example. This one relates to item 1. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
                           <h5 id="item-1-1">Item 1-1</h5>
                           <p>Placeholder content for the scrollspy example. This one relates to the item 1-1. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
                           <h5 id="item-1-2">Item 1-2</h5>
                           <p>Placeholder content for the scrollspy example. This one relates to the item 1-2. Her love is like a drug. All my girls vintage Chanel baby. Got a motel and built a fort out of sheets. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk. Catch her if you can. Stinging like a bee I earned my stripes.</p>
                           <h4 id="item-2">Item 2</h4>
                           <p>Placeholder content for the scrollspy example. This one relates to item 2. Don't need apologies. There is no fear now, let go and just be free, I will love you unconditionally. Last Friday night. Don't be a shy kinda guy I'll bet it's beautiful. Summer after high school when we first met. 'Cause she's the muse and the artist. What? Wait. No, no, no, no. Thought that I was the exception.</p>
                           <h4 id="item-3">Item 3</h4>
                           <p>Placeholder content for the scrollspy example. This one relates to item 3. Word on the street, you got somethin' to show me, me. All this money can't buy me a time machine. Make it like your birthday everyday. So we hit the boulevard. You make me feel like I'm livin' a teenage dream, the way you turn me on Skip the talk, heard it all, time to walk the walk. Word on the street, you got somethin' to show me, me. It's no big deal, it's no big deal, it's no big deal.</p>
                           <h5 id="item-3-1">Item 3-1</h5>
                           <p>Placeholder content for the scrollspy example. This one relates to item 3-1. Baby do you dare to do this? This is no big deal. Yeah, you're lucky if you're on her plane. Just own the night like the 4th of July! Standing on the frontline when the bombs start to fall. So just be sure before you give it all to me.</p>
                           <h5 id="item-3-2">Item 3-2</h5>
                           <p>Placeholder content for the scrollspy example. This one relates to item 3-2. You're original, cannot be replaced. All night they're playing, your song. California girls we're undeniable. Like a bird without a cage. There is no fear now, let go and just be free, I will love you unconditionally. I can see the writing on the wall. You could travel the world but nothing comes close to the golden coast.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-228">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-4">
                          <nav class="navbar navbar-light bg-light flex-column" id="navbar-example3"><a class="navbar-brand" href="#">Navbar</a>
                            <nav class="nav nav-pills flex-column"><a class="nav-link active" href="#item-1">Item 1</a>
                              <nav class="nav nav-pills flex-column"><a class="nav-link ms-3 my-1 active" href="#item-1-1">Item 1-1</a><a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a></nav><a class="nav-link" href="#item-2">Item 2</a><a class="nav-link" href="#item-3">Item 3</a>
                              <nav class="nav nav-pills flex-column"><a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a><a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a></nav>
                            </nav>
                          </nav>
                        </div>
                        <div class="col-8">
                          <div class="scrollspy-example-2" data-coreui-spy="scroll" data-coreui-target="#navbar-example3" data-coreui-offset="0" tabindex="0">
                            <h4 id="item-1">Item 1</h4>
                            <p>Placeholder content for the scrollspy example. This one relates to item 1. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.</p>
                            <h5 id="item-1-1">Item 1-1</h5>
                            <p>Placeholder content for the scrollspy example. This one relates to the item 1-1. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.</p>
                            <h5 id="item-1-2">Item 1-2</h5>
                            <p>Placeholder content for the scrollspy example. This one relates to the item 1-2. Her love is like a drug. All my girls vintage Chanel baby. Got a motel and built a fort out of sheets. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk. Catch her if you can. Stinging like a bee I earned my stripes.</p>
                            <h4 id="item-2">Item 2</h4>
                            <p>Placeholder content for the scrollspy example. This one relates to item 2. Don't need apologies. There is no fear now, let go and just be free, I will love you unconditionally. Last Friday night. Don't be a shy kinda guy I'll bet it's beautiful. Summer after high school when we first met. 'Cause she's the muse and the artist. What? Wait. No, no, no, no. Thought that I was the exception.</p>
                            <h4 id="item-3">Item 3</h4>
                            <p>Placeholder content for the scrollspy example. This one relates to item 3. Word on the street, you got somethin' to show me, me. All this money can't buy me a time machine. Make it like your birthday everyday. So we hit the boulevard. You make me feel like I'm livin' a teenage dream, the way you turn me on Skip the talk, heard it all, time to walk the walk. Word on the street, you got somethin' to show me, me. It's no big deal, it's no big deal, it's no big deal.</p>
                            <h5 id="item-3-1">Item 3-1</h5>
                            <p>Placeholder content for the scrollspy example. This one relates to item 3-1. Baby do you dare to do this? This is no big deal. Yeah, you're lucky if you're on her plane. Just own the night like the 4th of July! Standing on the frontline when the bombs start to fall. So just be sure before you give it all to me.</p>
                            <h5 id="item-3-2">Item 3-2</h5>
                            <p>Placeholder content for the scrollspy example. This one relates to item 3-2. You're original, cannot be replaced. All night they're playing, your song. California girls we're undeniable. Like a bird without a cage. There is no fear now, let go and just be free, I will love you unconditionally. I can see the writing on the wall. You could travel the world but nothing comes close to the golden coast.</p>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Scrollspy</strong><span class="small ms-1">Example with list-group</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Scrollspy also works with <code>.list-group</code>s. Scroll the area next to the list group and watch the active class change.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-430" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-430" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-430">
                  <div class="row">
                     <div class="col-4">
                        <div class="list-group" id="list-example"><a class="list-group-item list-group-item-action active" href="#list-item-1">Item 1</a><a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a><a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a><a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a></div>
                     </div>
                     <div class="col-8">
                        <div class="scrollspy-example" data-coreui-spy="scroll" data-coreui-target="#list-example" data-coreui-offset="0" tabindex="0">
                           <h4 id="list-item-1">Item 1</h4>
                           <p>Placeholder content for the scrollspy list-group example. This one relates to item 1. Don't need apologies. There is no fear now, let go and just be free, I will love you unconditionally. Last Friday night. Don't be a shy kinda guy I'll bet it's beautiful. Summer after high school when we first met. 'Cause she's the muse and the artist. What? Wait. Thought that I was the exception.</p>
                           <h4 id="list-item-2">Item 2</h4>
                           <p>Placeholder content for the scrollspy list-group example. This one relates to item 2. Yeah, she dances to her own beat. Oh, no. You could've been the greatest. 'Cause, baby, you're a firework. Maybe a reason why all the doors are closed. Open up your heart and just let it begin. So très chic, yeah, she's a classic.</p>
                           <h4 id="list-item-3">Item 3</h4>
                           <p>Placeholder content for the scrollspy list-group example. This one relates to item 3. We go higher and higher. Never one without the other, we made a pact. I'm walking on air. Someone said you had your tattoo removed. Now I’m floating like a butterfly. Tone, tan fit and ready, turn it up cause its gettin' heavy. Cause once you’re mine, once you’re mine. You just gotta ignite the light and let it shine! So we hit the boulevard. Do you ever feel, feel so paper thin. I see it all, I see it now.</p>
                           <h4 id="list-item-4">Item 4</h4>
                           <p>Placeholder content for the scrollspy list-group example. This one relates to item 4. Summer after high school when we first met. There is no fear now, let go and just be free, I will love you unconditionally. Sun-kissed skin so hot we'll melt your popsicle. This love will make you levitate.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-430">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-4">
                          <div class="list-group" id="list-example"><a class="list-group-item list-group-item-action active" href="#list-item-1">Item 1</a><a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a><a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a><a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a></div>
                        </div>
                        <div class="col-8">
                          <div class="scrollspy-example" data-coreui-spy="scroll" data-coreui-target="#list-example" data-coreui-offset="0" tabindex="0">
                            <h4 id="list-item-1">Item 1</h4>
                            <p>Placeholder content for the scrollspy list-group example. This one relates to item 1. Don't need apologies. There is no fear now, let go and just be free, I will love you unconditionally. Last Friday night. Don't be a shy kinda guy I'll bet it's beautiful. Summer after high school when we first met. 'Cause she's the muse and the artist. What? Wait. Thought that I was the exception.</p>
                            <h4 id="list-item-2">Item 2</h4>
                            <p>Placeholder content for the scrollspy list-group example. This one relates to item 2. Yeah, she dances to her own beat. Oh, no. You could've been the greatest. 'Cause, baby, you're a firework. Maybe a reason why all the doors are closed. Open up your heart and just let it begin. So très chic, yeah, she's a classic.</p>
                            <h4 id="list-item-3">Item 3</h4>
                            <p>Placeholder content for the scrollspy list-group example. This one relates to item 3. We go higher and higher. Never one without the other, we made a pact. I'm walking on air. Someone said you had your tattoo removed. Now I’m floating like a butterfly. Tone, tan fit and ready, turn it up cause its gettin' heavy. Cause once you’re mine, once you’re mine. You just gotta ignite the light and let it shine! So we hit the boulevard. Do you ever feel, feel so paper thin. I see it all, I see it now.</p>
                            <h4 id="list-item-4">Item 4</h4>
                            <p>Placeholder content for the scrollspy list-group example. This one relates to item 4. Summer after high school when we first met. There is no fear now, let go and just be free, I will love you unconditionally. Sun-kissed skin so hot we'll melt your popsicle. This love will make you levitate.</p>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>