<script>
    $(document).ready(function() {
        $timelineExpandableTitle = $('.timeline-action.is-expandable .title');

        $($timelineExpandableTitle).attr('tabindex', '0');

        // Give timelines ID's
        $('.timeline').each(function(i, $timeline) {
            var $timelineActions = $($timeline).find('.timeline-action.is-expandable');

            $($timelineActions).each(function(j, $timelineAction) {
                var $milestoneContent = $($timelineAction).find('.content');

                $($milestoneContent).attr('id', 'timeline-' + i + '-milestone-content-' + j).attr('role', 'region');
                $($milestoneContent).attr('aria-expanded', $($timelineAction).hasClass('expanded'));

                $($timelineAction).find('.title').attr('aria-controls', 'timeline-' + i + '-milestone-content-' + j);
            });
        });

        $($timelineExpandableTitle).click(function() {
            $(this).parent().toggleClass('is-expanded');
            $(this).siblings('.content').attr('aria-expanded', $(this).parent().hasClass('is-expanded'));
        });

        // Expand or navigate back and forth between sections
        $($timelineExpandableTitle).keyup(function(e) {
            if (e.which == 13){ //Enter key pressed
                $(this).click();
            } else if (e.which == 37 ||e.which == 38) { // Left or Up
                $(this).closest('.timeline-milestone').prev('.timeline-milestone').find('.timeline-action .title').focus();
            } else if (e.which == 39 ||e.which == 40) { // Right or Down
                $(this).closest('.timeline-milestone').next('.timeline-milestone').find('.timeline-action .title').focus();
            }
        });
    });
</script>

<article class="page">
    <h1>Timeline</h1>

    <h2>Vertical timeline</h2>
    <ul class="timeline">
        <li class="timeline-milestone is-completed timeline-start">
            <div class="timeline-action">
                <h2 class="title">Begin</h2>
                <span class="date">First quarter 2013</span>
                <div class="content">
                    We will have a small kickoff
                </div>
            </div>
        </li>
        <li class="timeline-milestone is-current">
            <div class="timeline-action is-expandable expanded">
                <h2 class="title">Initial planning</h2>
                <span class="date">Second quarter 2013</span>
                <div class="content">
                    <ul class="file-list">
                        <li><a href="example/video" class="video-link">Introduction video</a></li>
                        <li><a href="example.pdf">Project Plan, pdf 2,8 MB</a></li>
                        <li><a href="example.pdf">Requirements, pdf 5,3 MB</a></li>
                        <li><a href="example.pdf">Test Plan, pdf 7,6 MB</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="timeline-milestone is-future">
            <div class="timeline-action is-expandable">
                <h2 class="title">Start construction</h2>
                <span class="date">Fourth quarter 2013</span>
                <div class="content">

                </div>
            </div>
        </li>
        <li class="timeline-milestone is-future timeline-end">
            <div class="timeline-action">
                <h2 class="title">Test and verify</h2>
                <span class="date">Second quarter 2014</span>
                <div class="content">

                </div>
            </div>
        </li>
    </ul>
</article>