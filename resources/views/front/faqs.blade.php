@extends('layouts.front')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
<section class="page-hero-section">
    <div class="page-hero-section-overlay bg--green-100 bg--scroll">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12 text-center">
                    <div class="txt-block left-column">
                        <span class="section-id"></span>
                        <h2 class="s-28 mb-5">Frequently Asked Questions</h2>
                        <p class="s-16 w-400 mt-0">It's our fundamental trait to be transparent with our customers!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqs-3" class="py-80 faqs-section">
    <div class="container">
        <div class="faqs-3-questions">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="accordion-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">1. What are the basic eligibility requirements to apply for an
                                        unsecured loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Eligibility may vary depending on the lender, but the general criteria
                                                are:</p>
                                            <p><strong>For Salaried Applicants :</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 years</p>
                                                <p>&bull; Minimum Monthly Salary: ₹15,000 (income should be credited to
                                                    a bank account)</p>
                                                <p>&bull; Employment Duration: At least 1 year of work history</p>
                                            </div>
                                            <p><strong>For Self-Employed Applicants :</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 years</p>
                                                <p>&bull; Income Tax Filing: At least 1 year of ITR records</p>
                                                <p>&bull; Business Duration: Minimum 1 year of operational history</p>
                                            </div>
                                            <p>Final eligibility is determined by the lending institution based on their
                                                internal policies.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">2. What documents are usually required during the application
                                        process?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Applicants may be asked to provide the following documents:</p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Proof of Income (Salary Slip or Form 16 for salaried
                                                    individuals)</p>
                                                <p>&bull; Recent Bank Statements reflecting income deposits</p>
                                                <p>&bull; Residential Address Proof (Utility bill, rental agreement,
                                                    etc.)</p>
                                            </div>
                                            <p>Depending on the applicant’s profile, lenders may request additional
                                                documentation.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">3. Are there any tax advantages related to unsecured loans?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>
                                                Tax benefits generally depend on how the borrowed funds are used. For
                                                example, benefits may apply if the funds are utilized for purposes such
                                                as home renovation or certain business investments. For accurate
                                                guidance, it is advisable to consult a qualified tax advisor or
                                                chartered accountant.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">4. Can I apply for a loan online without visiting a bank branch?
                                    </h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>
                                                Yes. EasyAILoans.com provides a digital platform where users can check
                                                eligibility, submit documents, and initiate loan applications online
                                                through partnered financial institutions, subject to subscription-based
                                                service access.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">5. Can loan funds be used for purposes like education or personal
                                        expenses?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Unsecured loans generally offer flexible usage. Funds may be used for
                                                various personal or financial needs such as:</p>
                                            <div class="ps-2">
                                                <p>&bull; Higher education expenses</p>
                                                <p>&bull; Home improvements</p>
                                                <p>&bull; Medical bills</p>
                                                <p>&bull; Travel or lifestyle expenses</p>
                                                <p>&bull; Debt consolidation</p>
                                            </div>
                                            <p>However, final usage terms may vary depending on the lending institution.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">6. What factors influence loan approval?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Loan approval decisions are primarily based on the applicant’s financial
                                                profile. Key factors include:</p>
                                            <div class="ps-2">
                                                <p>&bull; Applicant’s age</p>
                                                <p>&bull; Monthly income and financial stability</p>
                                                <p>&bull; Credit score or credit history</p>
                                                <p>&bull; Existing liabilities and repayment capacity</p>
                                            </div>
                                            <p>Lenders may also consider additional criteria based on their risk
                                                assessment models.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-500 mb-0">7. What credit score is considered suitable for applying?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>While requirements may vary by lender, a credit score of around 650 or
                                                above is generally considered favorable for loan applications. Higher
                                                credit scores may improve the chances of approval and potentially offer
                                                better terms.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="divider">
@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush