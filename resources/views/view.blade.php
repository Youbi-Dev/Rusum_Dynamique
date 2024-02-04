
{{ view('layouts.header') }}
<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">User Profile</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> Home
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">User profiles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    {{ view('layouts.view') }}
                   
  </head>
  <body id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="py-3 clearfix">
          <h1 class="site-title mb-0">{{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : '' }}
                                        {{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}</h1>
          <div class="site-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="cover shadow-lg bg-white">
  <div class="cover-bg p-3 p-lg-4 text-white" img src= "data:image/jpeg;base64,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">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="{{ isset($information['personal_info']['image_path']) && !empty($information['personal_info']['image_path']) ? asset('assets/images/'. $information['personal_info']['image_path'])  : asset('assets/images/user-thumb.jpg') }}" width="200" height="200"/></div>
      </div>
      <div class="col-lg-8 col-md-7 text-center text-md-start">
        <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">{{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : '' }}
                                                             {{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}</h2>
        <p data-aos="fade-left" data-aos-delay="100">     {{ isset($information['personal_info']['profile_title']) ? $information['personal_info']['profile_title'] : '' }}</p>
        <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><!--<a class="btn btn-light text-dark shadow-sm mt-1 me-1" href="right-resume.pdf" target="_blank">Download CV</a><a class="btn btn-success shadow-sm mt-1" href="#contact">Hire Me</a>--></div>
      </div>
    </div>
  </div>
  <div class="about-section pt-4 px-3 px-lg-4 mt-1">
  @if (!empty($information['personal_info']['about_me']))
    <div class="row">
      <div class="col-md-6">
        <h2 class="h3 mb-3">About Me</h2>
        <p>{{ isset($information['personal_info']['about_me']) ? $information['personal_info']['about_me'] : '.' }}</p>
      </div>
      
      @endif
      <div class="col-md-5 offset-md-1">
        <div class="row mt-2">
          <div class="col-sm-4">
            
          </div>
          <div class="col-sm-8">
          
          </div>
          
          @if (!empty($information['contact_info']['email']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-solid fa-envelope"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a href="mailto: {{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : 'yourmail@example.com' }}">{{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : '' }}</a>
          </div>
          </div>
          @endif
          @if (!empty($information['contact_info']['phone_number']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-solid fa-phone"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a href="tel:{{ isset($information['contact_info']['phone_number']) ? $information['contact_info']['phone_number'] : '' }}">{{ isset($information['contact_info']['phone_number']) ? $information['contact_info']['phone_number'] : '' }}</a></div>
          </div>
          @endif
          @if (!empty($information['contact_info']['Adresse']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-solid fa-map"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a href="maps:{{ isset($information['contact_info']['Adresse']) ? $information['contact_info']['Adresse'] : '' }}">
                                                        {{ isset($information['contact_info']['Adresse']) ? $information['contact_info']['Adresse'] : '' }}</a></div>
          </div>
          
          @endif
   
          @if (!empty($information['contact_info']['website']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-solid fa-globe"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a  href="{{ isset($information['contact_info']['website']) ? $information['contact_info']['website'] : '' }}"
                                                        target="_blank">{{ isset($information['contact_info']['website']) ? $information['contact_info']['website'] : '' }}</a></div>
          </div>
          @endif

          @if (!empty($information['contact_info']['linkedin_link']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-brands fa-linkedin-in"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a href="{{ isset($information['contact_info']['linkedin_link']) ? $information['contact_info']['linkedin_link'] : '' }}"
                                                        target="_blank">{{ isset($information['contact_info']['linkedin_link']) ? $information['contact_info']['linkedin_link'] : '' }}</a></div>
          </div>
          @endif

          @if (!empty($information['contact_info']['github_link']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-brands fa-github"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a href="{{ isset($information['contact_info']['github_link']) ? $information['contact_info']['github_link'] : '' }}"
                                                        target="_blank">{{ isset($information['contact_info']['github_link']) ? $information['contact_info']['github_link'] : '' }}</a></div>
          </div>
          @endif
          @if (!empty($information['contact_info']['twitter']))
          <div class="col-sm-4">
            <div class="pb-1"><i class="fa-brands fa-twitter"></i></div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary"><a href="{{ isset($information['contact_info']['twitter']) ? $information['contact_info']['twitter'] : '' }}"
                                                        target="_blank">{{ isset($information['contact_info']['twitter']) ? $information['contact_info']['twitter'] : '' }}</a></div>
          </div>
          @endif
        </div>
      </div>
    
  </div>
 
  @if (!empty($information['skill_info']))
  <hr class="d-print-none"/>
  <div class="skills-section px-3 px-lg-4">
    <h2 class="h3 mb-3">Skills &amp; Proficiency</h2>
    <div class="row">
      <div class="col-md-6">
      @foreach ($information['skill_info'] as $skill_info)
        <div class="mb-2"><span>{{ isset($skill_info['skill_name']) ? $skill_info['skill_name'] : '' }}</span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: {{ isset($skill_info['skill_percentage']) ? $skill_info['skill_percentage'] : '0' }}%" aria-valuenow="{{ isset($skill_info['skill_percentage']) ? $skill_info['skill_percentage'] : '0' }}%" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        @endforeach
      </div>
      @endif
    </div>
  </div>
    
    

    @if (!empty($information['experience_info']))
  <hr class="d-print-none"/>
  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4">Work Experience</h2>
    @foreach ($information['experience_info'] as $experience_info)
    <div class="timeline">
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{ isset($experience_info['job_title']) ? $experience_info['job_title'] : '' }}</span></div>
          <div class="text-muted text-small mb-2">{{ isset($experience_info['job_start_date']) ? $experience_info['job_start_date'] : '' }}
                                                                -
                                                   {{ isset($experience_info['job_end_date']) ? $experience_info['job_end_date'] : '' }}</div>

           <div class="text-muted text-small mb-2">             {{ isset($experience_info['organization']) ? $experience_info['organization'] : '' }}</div>
          <div>{{ isset($experience_info['job_description']) ? $experience_info['job_description'] : '' }}</div>
        </div>
      </div>
      
      
    </div>
    @endforeach
  </div>
  @endif

  @if (!empty($information['education_info']))
  <hr class="d-print-none"/>
  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-4">
    <h2 class="h3 mb-4">Education</h2>
    @foreach ($information['education_info'] as $education_info)
    <div class="timeline">
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{ isset($education_info['degree_title']) ? $education_info['degree_title'] : '' }} <span class="text-muted h6">{{ isset($education_info['institute']) ? $education_info['institute'] : '' }}</span></div>
          <div class="text-muted text-small mb-2">{{ isset($education_info['edu_start_date']) ? $education_info['edu_start_date'] : '' }} - {{ isset($education_info['edu_end_date']) ? $education_info['edu_end_date'] : '' }}</div>
          <div>{{ isset($education_info['education_description']) ? $education_info['education_description'] : '' }}</div>
        </div>
      </div>
      
      
    </div>
    @endforeach
  </div>
  @endif

  @if (!empty($information['language_info']))
  <hr class="d-print-none"/>
  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4">Languages</h2>
    @foreach ($information['language_info'] as $language_info)
    <div class="timeline">
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{ isset($language_info['language']) ? $language_info['language'] : '' }}</span></div>
          <div class="text-muted text-small mb-2">
                                                   </div>

           <div class="text-muted text-small mb-2">            </div>
          <div>({{ isset($language_info['language_level']) ? $language_info['language_level'] : '' }})</div>
        </div>
      </div>
      
      
    </div>
    @endforeach
  </div>
  @endif


  @if (!empty($information['project_info']))
  <hr class="d-print-none"/>
  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4">Projects</h2>
    @foreach ($information['project_info'] as $project_info)
    <div class="timeline">
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{ isset($project_info['project_title']) ? $project_info['project_title'] : '' }}</span></div>
          <div class="text-muted text-small mb-2">
                                                   </div>

           <div class="text-muted text-small mb-2">            </div>
          <div>{{ isset($project_info['project_description']) ? $project_info['project_description'] : '' }}</div>
        </div>
      </div>
      
      
    </div>
    @endforeach
  </div>
  @endif

 


      @if (!empty($information['interest_info']))
      <hr class="d-print-none"/>
      <div class="about-section pt-4 px-3 px-lg-4 mt-1">
     <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-6"><center>Interests</center></h2>
        @foreach ($information['interest_info'] as $interest_info)
        <p>  {{ isset($interest_info['interest']) ? $interest_info['interest'] : '' }}</p>
        @endforeach
      </div>
     </div>
    </div>
    @endif

  <hr class="d-print-none"/>
  <div class="contant-section px-3 px-lg-4 pb-4" id="contact">
    <h2 class="h3 text mb-3">Contact</h2>
    <div class="row">
      <div class="col-md-7 d-print-none">
        <div class="my-2"><form action="https://formspree.io/your@email.com"
    method="POST">
  <div class="row">
    <div class="col-6">
      <input class="form-control" type="text" id="name" name="name" placeholder="Votre Nom" required>
    </div>
    <div class="col-6">
      <input class="form-control" type="email" id="email" name="_replyto" placeholder="Votre E-mail" required>
    </div>
  </div>
  <div class="form-group my-2">
    <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4"  placeholder="Votre Message" required></textarea>
  </div>
  <button class="btn btn-primary mt-2" type="submit">Send</button>
</form>
        </div>
      </div>
      <div class="col">
      @if (!empty($information['contact_info']['Adresse']))
        <div class="mt-2">
          <h3 class="h6">Address</h3>
          <div class="pb-2 text-secondary">{{ isset($information['contact_info']['Adresse']) ? $information['contact_info']['Adresse'] : '' }}</div>
          @endif
          @if (!empty($information['contact_info']['phone_number']))
          <h3 class="h6">Phone</h3>
          <div class="pb-2 text-secondary">{{ isset($information['contact_info']['phone_number']) ? $information['contact_info']['phone_number'] : '' }}</div>
          @endif
          @if (!empty($information['contact_info']['email']))
          <h3 class="h6">Email</h3>
          <div class="pb-2 text-secondary">{{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : '' }}</div>
          @endif
        </div>
      </div>
      <div class="col d-none d-print-block">
        <div class="mt-2">
          <div>
            <div class="mb-2">
             
              
            </div>
            <div class="mb-2">
             
            </div>
            <div class="mb-2">
            
            </div>
            <div class="mb-2">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
    
  </body>
</html>

{{ view('layouts.footer') }}
