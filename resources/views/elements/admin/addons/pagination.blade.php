<?php //dd($data);?>
<div class="d-flex justify-content-end w-100 align-items-center">
    @if (isset($data) && $data->lastPage() > 1)

        <ul class="pagination">

            <?php
            $interval = isset($interval) ? abs(intval($interval)) : 3 ;
            $from = $data->currentPage() - $interval;
            if($from < 1){
                $from = 1;
            }

            $to = $data->currentPage() + $interval;
            if($to > $data->lastPage()){
                $to = $data->lastPage();
            }
            ?>

            <!-- first/previous -->
            @if($data->currentPage() > 1)
                <li>
                    <a href="{{ $data->url(1) }}" aria-label="First">
                    
                    <span aria-hidden="true">First</span>
                    </a>
                </li>

                <li>
                    <a href="{{ $data->url($data->currentPage() - 1) }}" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                        
                    </a>
                </li>
            @endif

            <!-- links -->
            @for($i = $from; $i <= $to; $i++)
                <?php 
                $isCurrentPage = $data->currentPage() == $i;
                ?>
                <li class="{{ $isCurrentPage ? 'active' : '' }}">
                    <a href="{{ !$isCurrentPage ? $data->url($i) : '#' }}">
                        {{ $i }}
                    </a>
                </li>
            @endfor

            <!-- next/last -->
            @if($data->currentPage() < $data->lastPage())
                <li>
                    <a href="{{ $data->url($data->currentPage() + 1) }}" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                        
                    </a>
                </li>

                <li>
                    <a href="{{ $data->url($data->lastpage()) }}" aria-label="Last">
                    <span aria-hidden="true">Last</span>
                    </a>
                </li>
            @endif

        </ul>

    @endif
</div>