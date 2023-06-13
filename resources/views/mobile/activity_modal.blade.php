
            <h4 class="text-center">
                تفاصيل النشاط
            </h4>
            <div class="body-header">
                <h5>{{$activity->s_title}}</h5>
                <div class="d-flex gap-4 mt-3">
                    <div class="d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <g id="Group_61212" data-name="Group 61212" transform="translate(-969 -348)">
                                <rect id="Rectangle" width="32" height="32" rx="16" transform="translate(969 348)" fill="#f1f2f4"/>
                                <g id="vuesax_linear_category" data-name="vuesax/linear/category" transform="translate(867 166)">
                                    <g id="category" transform="translate(110 190)">
                                        <path id="Vector" d="M2.407,6.42h1.6A2.128,2.128,0,0,0,6.42,4.012v-1.6A2.128,2.128,0,0,0,4.012,0h-1.6A2.128,2.128,0,0,0,0,2.407v1.6A2.128,2.128,0,0,0,2.407,6.42Z" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                        <path id="Vector-2" data-name="Vector" d="M2.407,6.42h1.6A2.128,2.128,0,0,0,6.42,4.012v-1.6A2.128,2.128,0,0,0,4.012,0h-1.6A2.128,2.128,0,0,0,0,2.407v1.6A2.128,2.128,0,0,0,2.407,6.42Z" transform="translate(9.58)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                        <path id="Vector-3" data-name="Vector" d="M2.407,6.42h1.6A2.128,2.128,0,0,0,6.42,4.012v-1.6A2.128,2.128,0,0,0,4.012,0h-1.6A2.128,2.128,0,0,0,0,2.407v1.6A2.128,2.128,0,0,0,2.407,6.42Z" transform="translate(9.58 9.58)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                        <path id="Vector-4" data-name="Vector" d="M2.407,6.42h1.6A2.128,2.128,0,0,0,6.42,4.012v-1.6A2.128,2.128,0,0,0,4.012,0h-1.6A2.128,2.128,0,0,0,0,2.407v1.6A2.128,2.128,0,0,0,2.407,6.42Z" transform="translate(0 9.58)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h6 class="mb-0">التصنيف: {{($activity->interest)->s_title}}</h6>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <g id="Group_60979" data-name="Group 60979" transform="translate(-327 -368)">
                                <rect id="Rectangle" width="32" height="32" rx="16" transform="translate(327 368)" fill="#f1f2f4"/>
                                <g id="money-4" transform="translate(-287 121.7)">
                                    <path id="Vector" d="M12,13.6H4c-2.4,0-4-1.2-4-4V4C0,1.2,1.6,0,4,0h8c2.4,0,4,1.2,4,4V9.6C16,12.4,14.4,13.6,12,13.6Z" transform="translate(622 255.5)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    <path id="Vector-2" data-name="Vector" d="M4.8,2.4A2.4,2.4,0,1,1,2.4,0,2.4,2.4,0,0,1,4.8,2.4Z" transform="translate(627.601 259.901)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    <path id="Vector-3" data-name="Vector" d="M3.2,0H2A2,2,0,0,0,0,2V3.2" transform="translate(623.999 257.499)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    <path id="Vector-4" data-name="Vector" d="M0,0H1.2a2,2,0,0,1,2,2V3.2" transform="translate(632.802 257.499)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    <path id="Vector-5" data-name="Vector" d="M3.2,3.2H2a2,2,0,0,1-2-2V0" transform="translate(623.999 263.902)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    <path id="Vector-6" data-name="Vector" d="M0,3.2H1.2a2,2,0,0,0,2-2V0" transform="translate(632.802 263.902)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                </g>
                            </g>
                        </svg>
                        <h6 class="mb-0">  نشاط مجاني  </h6>
                    </div>
                </div>
            </div>
            <div class="body-description">
                <h5>عن النشاط</h5>
                <p>{{$activity->s_description}}
                </p>
            </div>
            <div class="body-footer">
                <h5>الفترات المتاحة</h5>
                <div class="time">
                    @foreach($activity->periods as $period)
                        @foreach($period->timetables as $timetable)
                            <div class="time-style">
                            <p>{{date("h:i A",strtotime($timetable->dt_from)) ." - ".date("h:i A",strtotime($timetable->dt_to))}}</p>
                            </div>
                        @endforeach
                        @endforeach
                </div>
                <div class="note">
                    <h6><span>ملاحظة:</span> لكي تتمكن من الحجز لهذا النشاط , من فضلك قم بتنزيل التطبيق</h6>
                    <figure>
                        <img src="{{asset('mobile-assets/images/qr.png')}}" alt="" srcset="">
                    </figure>
                </div>
            </div>
