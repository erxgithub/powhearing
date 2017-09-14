<!-- Description component that will present description for each page -->


<?php
echo "description.php";

if(is_page('organizations')){ ?>
<div class="organi-box">
    <h1 class="organi-title">Organizations</h1>
    <p class="organi-content">
    Providing an inclusive environment where everyone can participate fully, with POWs’ Real-Time Access Services.
    With Projected Text Transcription creating near verbatim captioning of the spoken word, simultaneously projected onto a large screen to allow your whole audience – those who are hard of hearing, people who rely on text-based communication, ESL Learners, and American Sign Language users, the opportunity to follow discussions, presentations, videos, and audience comments.
    We can also connect any audio component of your presentation to our (Induction)Hearing Loop assistive listening sound system, to maximize the potential of your message reaching those audience members who may have difficulty hearing you.
    </p>
</div>
<?php } 
elseif (is_page('live_events') ){ ?>

<div class="live-box">
    <h1 class="live-title">Live Events</h1>
    <p class="live-content">
    Providing an inclusive environment where everyone can participate fully, with POWs’ Real-Time Access Services.
    With Projected Text Transcription creating near verbatim captioning of the spoken word, simultaneously projected onto a large screen to allow your whole audience – those who are hard of hearing, people who rely on text-based communication, ESL Learners, and American Sign Language users, the opportunity to follow discussions, presentations, videos, and audience comments.
    We can also connect any audio component of your presentation to our (Induction)Hearing Loop assistive listening sound system, to maximize the potential of your message reaching those audience members who may have difficulty hearing you.
    </p>
</div>

    
<?php }
else {?>
<div class="indiv-box">
    <h1 class="indiv-title">Individuals</h1>
    <p class="indiv-content">
    Providing an inclusive environment where everyone can participate fully, with POWs’ Real-Time Access Services.
    With Projected Text Transcription creating near verbatim captioning of the spoken word, simultaneously projected onto a large screen to allow your whole audience – those who are hard of hearing, people who rely on text-based communication, ESL Learners, and American Sign Language users, the opportunity to follow discussions, presentations, videos, and audience comments.
    We can also connect any audio component of your presentation to our (Induction)Hearing Loop assistive listening sound system, to maximize the potential of your message reaching those audience members who may have difficulty hearing you.
    </p>
</div>
    
<?php } ?>