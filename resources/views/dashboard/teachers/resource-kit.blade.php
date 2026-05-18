@extends('dashboard.layouts.master')

@section('title', __('Teacher’s Resources Guide'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/resource-kit.css') }}" />
    <style>
        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.96);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Hover effects (pure JS not needed, just polish) */
        #modalLessonBtn:hover {
            background: #b38720;
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(196, 154, 43, 0.3);
        }

        #modalWorksheetBtn:hover {
            background: #eef3ea;
            border-color: #c49a2b;
            color: #c49a2b;
        }

        #modalCloseBtn:hover {
            color: #1a3b2b;
            text-decoration: underline;
        }

        #lessonCardLink:hover,
        #worksheetCardLink:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        #lessonCardLink,
        #worksheetCardLink {
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
        }

        #lessonCardLink:hover,
        #worksheetCardLink:hover {
            border-color: #06B6D4;
        }
    </style>
@endsection

@section('backbutton')
    <a href="{{ route('teacher.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Teacher’s Resources Guide</span>
    </div>
    <div class="container item-container mt-5">
        <!-- English Books -->
        <div class="item-title">
            <span>English/Phonics</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/english/MBS-Jr-Infant-Teaching-Guides') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mbs-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">MBS Jr. Infant <br> Teaching Guide</span>
                    <div class="vertical-bottom">
                        <span class="badge english">English</span>
                        <div class="mute-text">
                            <span>PDF • 57 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/english/MBS-Sr-Infant-Teaching-Guides') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mbs-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">MBS Sr. Infant <br> Teaching Guide</span>
                    <div class="vertical-bottom">
                        <span class="badge english">English</span>
                        <div class="mute-text">
                            <span>PDF • 94 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/english/My-book-of-Rhymes') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mbs-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">My Book of Rhymes <br> Teaching Guide</span>
                    <div class="vertical-bottom">
                        <span class="badge english">English</span>
                        <div class="mute-text">
                            <span>PDF • 48 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Mathematics Books -->
        <div class="item-title mt-5">
            <span>Mathematics</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/math/Maths-Junior-Infant-Part-1-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-jr-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Jr. Infant <br> Part 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 24 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Junior-Infant-Part-2-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-jr-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Jr. Infant <br> Part 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 20 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Senior-Infant-Part-1-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-sr-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Sr. Infant <br> Part 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 18 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Senior-Infant-Part-2-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/math-sr-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Sr. Infant <br> Part 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 23 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-1') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 95 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-2') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 65 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-3') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 3 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 150 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-4') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 4 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 159 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-5') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 5 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 145 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-6') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 73 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-7') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/math/Maths-Star-8') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mathstar-grade-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Maths Stars 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge mathematics">Mathematics</span>
                        <div class="mute-text">
                            <span>PDF • 49 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- General Knowledge Books -->
        <div class="item-title mt-5">
            <span>General Knowledge</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/gk/Small-World-Junior-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-jr.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Junior TG</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 71 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-Senior-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-sr.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Senior TG</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 147 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-Class-1') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-class-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Class 1</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 147 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-Class-2') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-class-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Class 2</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 188 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-Class-3') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-class-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 214 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-SNC-Class-1') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-snc-class-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World SNC <br> Class 1</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 55 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-SNC-Class-2') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-snc-class-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World SNC <br> Class 2</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 45 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-SNC-Class-3') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-snc-class-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World SNC <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge science">GK</span>
                        <div class="mute-text">
                            <span>PDF • 40 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Social Studies Books -->
        <div class="item-title mt-5">
            <span>Social Studies</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/gk/Small-World-SNC-Class-4') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-snc-class-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World SNC <br> Class 4</span>
                    <div class="vertical-bottom">
                        <span class="badge science">SST</span>
                        <div class="mute-text">
                            <span>PDF • 78 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/gk/Small-World-SNC-Class-5') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/small-world-snc-class-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Small World SNC <br> Class 5</span>
                    <div class="vertical-bottom">
                        <span class="badge science">SST</span>
                        <div class="mute-text">
                            <span>PDF • 68 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Urdu Books -->
        <div class="item-title mt-5">
            <span>Urdu</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/urdu/Samar-e-Urdu-Shahtoot') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-shahtoot-playgroup.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu Shahtoot <br> PlayGroup TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 48 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Samar-e-Urdu-Kaila') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-kaila-nursery.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu Kaila <br> Nursery TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 65 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Samar-e-Urdu-Aaroo') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-aroo-kg-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu Aaroo <br> KG-I TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 57 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Samar-e-Urdu-Amrood') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-amrood-kg-2.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu Amrood <br> KG-II TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 43 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-1-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-aam-class-1.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Aam Class 1 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 80 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-2-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-anar-class-2.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Aanar Class 2 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 80 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-3-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-angoor-class-3.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Angoor Class 3 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 109 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-4-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-saib-class-4.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Saib Class 4 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 108 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-5-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-santra-class-5.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Santra Class 5 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 112 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-6-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-neem-class-6.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Neem Class 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 126 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-7-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-snobar-class-7.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Sanober Class 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 109 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu/Urdu-Class-8-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/samar-e-urdu-amaltas-class-8.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Samar e Urdu <br> Amaltas Class 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 103 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Urdu Dhanak Series Books -->
        <div class="item-title mt-5">
            <span>Urdu Dhanak Series</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Laal-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-laal-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu laal <br> Class 1</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 79 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Neela') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-neela-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Neela <br> Class 2</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 112 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Peela') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-peela-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Peela <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 102 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Hara') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-hara-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Hara <br> Class 4</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 116 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Narangi') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-narangi-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Naranji <br> Class 5</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 114 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Urdu-Jamni') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-jamni-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Jamni <br> Class 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 94 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Urdu-Unabi-Class-7') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-unabi-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Unabi <br> Class 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 119 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak/Dhanak-Urdu-Safaid-Class-8') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-urdu-safaid-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Safaid <br> Class 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 108 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Dhanak Series Special Edition Books -->
        <div class="item-title mt-5">
            <span>Dhanak Series Special Edition</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/urdu-dhanak-special/Dhanak-Urdu-Jamni-6') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-special-urdu-jamni-6.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Jamni <br> Class 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 90 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak-special/Dhanak-Urdu-Unabi-Class-7') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-special-urdu-unabi-7.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Unabi <br> Class 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 137 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/urdu-dhanak-special/Dhanak-Urdu-Safaid-Class-8') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/dhanak-special-urdu-safaid-8.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Dhanak Urdu Safaid <br> Class 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge urdu">Urdu</span>
                        <div class="mute-text">
                            <span>PDF • 114 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Islamiat (Mera Pyara Deen Islam) Books -->
        <div class="item-title mt-5">
            <span>Islamiat (Mera Pyara Deen Islam)</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Class-3-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-3.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Mera Pyara Deen Islam <br> Class 3</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 59 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Class-4-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-4.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Mera Pyara Deen Islam <br> Class 4</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 73 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Class-5-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-5.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Mera Pyara Deen Islam <br> Class 5</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 67 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Class-6-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-6.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Mera Pyara Deen Islam <br> Class 6</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 63 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Class-7-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-7.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Mera Pyara Deen Islam <br> Class 7</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 64 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Class-8-TG') }}" target="_blank" class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/mera-piyara-deen-e-islam-class-8.jpg') }}"
                    alt="book">
                <div class="box-title">
                    <span class="title">Mera Pyara Deen Islam <br> Class 8</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 65 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Islamiat (Lazmi) Books -->
        <div class="item-title mt-5">
            <span>Islamiat (Lazmi)</span>
        </div>
        <div class="boxes mt-5">
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Lazmi-Class-3-TG') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 3 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Lazmi-Class-4-TG') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 4 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 86 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Lazmi-Class-5-TG') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 5 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 84 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Lazmi-Class-6-TG') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 6 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 93 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Lazmi-Class-7-TG') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 7 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 103 pages</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ asset('assets/ebooks/islamiyat/Islamiat-Lazmi-Class-8-TG') }}" target="_blank"
                class="items-box">
                <img height="80px" src="{{ asset('assets/images/books/islamiat-lazmi-class-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Islamiat Lazmi <br> Class 8 TG</span>
                    <div class="vertical-bottom">
                        <span class="badge islamiat">Islamiat</span>
                        <div class="mute-text">
                            <span>PDF • 85 pages</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Computer (Digital Discovery) Books -->
        <div class="item-title mt-5">
            <span>Computer (Digital Discovery)</span>
        </div>
        <div class="boxes mt-5">
            <a href="" target="_blank" class="items-box" data-grade="Grade-1">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-1.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 1</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-2">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-2.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 2</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-3">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-3.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 3</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-4">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-4.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 4</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-5">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-5.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 5</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-6">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-6.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 6</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-7">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-7.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 7</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
            <a href="" target="_blank" class="items-box" data-grade="Grade-8">
                <img height="80px" src="{{ asset('assets/images/books/computer/Grade-8.jpg') }}" alt="book">
                <div class="box-title">
                    <span class="title">Digital Discovery <br> Grade 8</span>
                    <div class="vertical-bottom">
                        <span class="badge computer">computer</span>
                        {{-- <div class="mute-text">
                            <span>PDF • 72 pages</span>
                        </div> --}}
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Modal with Cards inside - Exact copy of your design -->
    <div id="resourceModal"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.75); z-index: 99999; justify-content: center; align-items: center;">
        <div style="background: white; width: 90%; max-width: 700px; border-radius: 20px; padding: 25px;">

            <!-- Header -->
            <div style="text-align: center; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #eee;">
                <h3 style="margin: 0;">Choose Resource for <span id="modalGradeLabel" style="color: #0369AF;">Grade
                        1</span></h3>
            </div>

            <!-- Cards Container - same as your original structure -->
            <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">

                <!-- LESSON CARD - EXACT SAME AS YOUR ITEMS-BOX -->
                <a href="#" id="lessonCardLink" class="items-box" data-grade="Grade-1"
                    style="flex: 1; min-width: 250px; text-decoration: none;">
                    <img height="80px" id="lessonImg" src="" alt="lesson">
                    <div class="box-title">
                        <span class="title">Digital Discovery <br> <span id="lessonGradeText">Grade 1</span>
                            Lesson</span>
                        <div class="vertical-bottom">
                            <span class="badge computer">Lesson</span>
                            <div class="mute-text">
                                <span>PDF • Digital Resource</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- WORKSHEET CARD - EXACT SAME AS YOUR ITEMS-BOX -->
                <a href="#" id="worksheetCardLink" class="items-box" data-grade="Grade-1"
                    style="flex: 1; min-width: 250px; text-decoration: none;">
                    <img height="80px" id="worksheetImg" src="" alt="worksheet">
                    <div class="box-title">
                        <span class="title">Digital Discovery <br> <span id="worksheetGradeText">Grade 1</span>
                            Worksheet</span>
                        <div class="vertical-bottom">
                            <span class="badge computer">Worksheet</span>
                            <div class="mute-text">
                                <span>PDF • Printable</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Cancel Button -->
            <div style="text-align: center; margin-top: 25px;">
                <button id="modalCloseBtn"
                    style="background: #eee; border: none; padding: 8px 25px; border-radius: 6px; cursor: pointer;">Cancel</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const modal = document.getElementById('resourceModal');
        const lessonCard = document.getElementById('lessonCardLink');
        const worksheetCard = document.getElementById('worksheetCardLink');
        const closeBtn = document.getElementById('modalCloseBtn');
        const gradeLabelSpan = document.getElementById('modalGradeLabel');
        const lessonImg = document.getElementById('lessonImg');
        const worksheetImg = document.getElementById('worksheetImg');
        const lessonGradeText = document.getElementById('lessonGradeText');
        const worksheetGradeText = document.getElementById('worksheetGradeText');

        let currentGrade = null;

        function openResource(type, grade) {
            const path = type === 'lesson' ?
                `assets/ebooks/computer/lesson/${grade}` :
                `assets/ebooks/computer/worksheets/${grade}`;
            window.open(path, '_blank');
            modal.style.display = 'none';
        }

        lessonCard.onclick = (e) => {
            e.preventDefault();
            if (currentGrade) openResource('lesson', currentGrade);
        };

        worksheetCard.onclick = (e) => {
            e.preventDefault();
            if (currentGrade) openResource('worksheet', currentGrade);
        };

        closeBtn.onclick = () => modal.style.display = 'none';
        modal.onclick = (e) => {
            if (e.target === modal) modal.style.display = 'none';
        };

        // Attach to your original grade links
        document.querySelectorAll('a[data-grade]').forEach(link => {
            // Skip the modal ones
            if (link.id === 'lessonCardLink' || link.id === 'worksheetCardLink') return;

            link.addEventListener('click', (e) => {
                e.preventDefault();
                currentGrade = link.getAttribute('data-grade');
                const gradeNum = currentGrade.split('-')[1];

                // Update all grade displays
                gradeLabelSpan.innerText = `Grade ${gradeNum}`;
                lessonGradeText.innerText = `Grade ${gradeNum}`;
                worksheetGradeText.innerText = `Grade ${gradeNum}`;

                // Update images using your asset helper
                lessonImg.src = `{{ asset('assets/images/books/computer/${currentGrade}.jpg') }}`;
                worksheetImg.src = `{{ asset('assets/images/books/computer/${currentGrade}.jpg') }}`;

                // Update data-grade attributes on modal cards
                lessonCard.setAttribute('data-grade', currentGrade);
                worksheetCard.setAttribute('data-grade', currentGrade);

                modal.style.display = 'flex';
            });
        });
    </script>
@endsection
