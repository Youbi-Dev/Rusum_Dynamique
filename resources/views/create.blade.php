{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">Gérer les profils d'utilisateurs</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> Home
                    </a>
                    <button onclick="saverecord()" class="save-btn">
                        <i class="fa fa-save"></i>
                        <br> Sauvegarder
                    </button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">Créer un profil utilisateur</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">Créer un profil utilisateur</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 p-md-5 p-sm-4 p-3">
                                <form action="{{ route('store') }}" id="createform" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Personal Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">Informations personnelles</h2>
                                            <div class="form-outline mb-4">
                                                <input type="hidden" id="user_id" name="user_id"
                                                    class="form-control" />
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-6 col-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label fw-bold text-secondary">Prénom</label>
                                                                <input type="text" id="first_name" name="first_name"
                                                                    placeholder="Prénom" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-outline">
                                                                <label class="form-label fw-bold text-secondary">
                                                                    nom</label>
                                                                <input type="text" id="last_name" name="last_name"
                                                                    placeholder="nom" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="profile_picture text-center">
                                                        <input type="file" name="image_path"
                                                            accept="image/png, image/jpeg, image/jpg"
                                                            onchange="display_image(this);"
                                                            class="d-none upload-box-image">
                                                        <img class="box-image-preview img-fluid img-circle elevation-2"
                                                            src="{{ asset('assets/images/user-thumb.jpg') }}"
                                                            alt="Profile picture"
                                                            onclick="$(this).closest('.profile_picture').find('input').click();"
                                                            style="height:150px; width:150px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">Titre du profil</label>
                                                <input type="text" id="profile_title" name="profile_title"
                                                    class="form-control" placeholder="Titre du profil" required />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">À propos</label>
                                                <textarea class="form-control" placeholder="À propos" id="about_me" name="about_me" rows="4"></textarea>
                         
                                        </div>
                                    </div>

                                    {{-- Contact Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">Coordonnées</h2>
                                            <div class="row mb-4">
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label fw-bold text-secondary">E-mail</label>
                                                        <input type="email" id="email" name="email"
                                                            placeholder="E-mail" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label
                                                            class="form-label fw-bold text-secondary">Adresse</label>
                                                            <input type="text" id="Adresse" name="Adresse"
                                                                    placeholder="Adresse" class="form-control"
                                                                    required />
                                                            </div>
                                                    </div>
                                
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label fw-bold text-secondary">Numéro de téléphone</label>
                                                        <input type="number" id="phone_number" name="phone_number"
                                                            placeholder="Numéro de téléphone" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label
                                                            class="form-label fw-bold text-secondary">Site Internet</label>
                                                        <input type="url" id="website" name="website"
                                                            class="form-control" placeholder="Site Internet" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label
                                                            class="form-label fw-bold text-secondary">LinkedIn</label>
                                                        <input type="url" id="linkedin_link" name="linkedin_link"
                                                            class="form-control" placeholder="LinkedIn" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label fw-bold text-secondary">Github</label>
                                                        <input type="url" id="github_link" name="github_link"
                                                            class="form-control" placeholder="Github" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label
                                                            class="form-label fw-bold text-secondary">Twitter</label>
                                                        <input type="text" id="twitter" name="twitter"
                                                            class="form-control" placeholder="Twitter" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Education --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Éducation</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_education">Ajouter une formation</button>
                                                </div>
                                            </div>
                                            <section class="education_section">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="form-outline mb-4">
                                                            <label
                                                                class="form-label fw-bold text-secondary">Degré</label>
                                                            <input type="text" id="degree_title"
                                                                name="degree_title[]" class="form-control"
                                                                placeholder="Degré" />
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label
                                                                class="form-label fw-bold text-secondary">Institut</label>
                                                            <input type="text" id="institute" name="institute[]"
                                                                class="form-control" placeholder="Institut" />
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-sm-6 col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Date de début</label>
                                                                    <input type="date" id="edu_start_date"
                                                                        name="edu_start_date[]"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Date de fin</label>
                                                                    <input type="date" id="edu_end_date"
                                                                        name="edu_end_date[]" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label fw-bold text-secondary">Description du diplôme</label>
                                                            <textarea class="form-control" placeholder="Description" id="education_description" name="education_description[]"
                                                                rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Experiencce --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Expérience</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_experience">Ajouter une expérience</button>
                                                </div>
                                            </div>
                                            <section class="experience_section">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label fw-bold text-secondary">Titre d'emploi</label>
                                                            <input type="text" id="job_title" name="job_title[]"
                                                                class="form-control" placeholder="Titre d'emploi" />
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label
                                                                class="form-label fw-bold text-secondary">Organisation</label>
                                                            <input type="text" id="organization"
                                                                name="organization[]" class="form-control"
                                                                placeholder="Organization" />
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-sm-6 col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Date de début</label>
                                                                    <input type="date" id="job_start_date"
                                                                        name="job_start_date[]"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Date de fin</label>
                                                                    <input type="date" id="job_end_date"
                                                                        name="job_end_date[]" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label fw-bold text-secondary">Description de l'emploi</label>
                                                            <textarea class="form-control" placeholder="Description de l'emploi" id="job_description" name="job_description[]"
                                                                rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Projects --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Projets</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_project">Ajouter un projet</button>
                                                </div>
                                            </div>
                                            <section class="project_section">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label fw-bold text-secondary">Titre du projet</label>
                                                            <input type="text" id="project_title"
                                                                name="project_title[]" class="form-control"
                                                                placeholder="Project Title" />
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label fw-bold text-secondary">Description du projet</label>
                                                            <textarea class="form-control" placeholder="Description du projet" id="project_description"
                                                                name="project_description[]" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    {{-- SKILLS & PROFICIENCY --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Compétences et maîtrise</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_skill">Ajouter une compétence</button>
                                                </div>
                                            </div>
                                            <section class="skill_section">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Ajouter une compétence</label>
                                                                    <input type="text" id="skill_name"
                                                                        name="skill_name[]" class="form-control"
                                                                        placeholder="Ajouter une compétence" value="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Pourcentage</label>
                                                                    <div class="input-group">
                                                                        <input type="number" step="5"
                                                                            id="skill_percentage"
                                                                            name="skill_percentage[]" placeholder="%"
                                                                            class="form-control"
                                                                            aria-describedby="percentage">
                                                                        <span class="input-group-text"
                                                                            id="percentage">%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Languages --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Langages</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_language">Ajouter une langue</button>
                                                </div>
                                            </div>
                                            <section class="language_section">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Ajouter une langue</label>
                                                                    <select class="form-control" id="language"
                                                                        name="language[]">
                                                                        <option value="">Ajouter une langue</option>
                                                                        <option value="Afrikaans">Afrikaans</option>
                                                                        <option value="Albanian">Albanian - shqip
                                                                        </option>
                                                                        <option value="Amharic">Amharic - አማርኛ</option>
                                                                        <option value="Arabic">Arabic - العربية
                                                                        </option>
                                                                        <option value="Aragonese">Aragonese - aragonés
                                                                        </option>
                                                                        <option value="Armenian">Armenian - հայերեն
                                                                        </option>
                                                                        <option value="Asturian">Asturian - asturianu
                                                                        </option>
                                                                        <option value="Azerbaijani">Azerbaijani - azərbaycan
                                                                            dili
                                                                        </option>
                                                                        <option value="Basque">Basque - euskara
                                                                        </option>
                                                                        <option value="Belarusian">Belarusian - беларуская
                                                                        </option>
                                                                        <option value="Bengali">Bengali - বাংলা</option>
                                                                        <option value="Bosnian">Bosnian - bosanski
                                                                        </option>
                                                                        <option value="Breton">Breton - brezhoneg
                                                                        </option>
                                                                        <option value="Bulgarian">Bulgarian - български
                                                                        </option>
                                                                        <option value="Catalan">Catalan - català
                                                                        </option>
                                                                        <option value="Central">Central Kurdish - کوردی
                                                                            (دەستنوسی
                                                                            عەرەبی)</option>
                                                                        <option value="Chinese">Chinese - 中文</option>
                                                                        <option value="Chinese-Hong-Kong">Chinese (Hong Kong) -
                                                                            中文（香港）
                                                                        </option>
                                                                        <option value="Chinese-Simplified">Chinese (Simplified) -
                                                                            中文（简体）
                                                                        </option>
                                                                        <option value="Chinese-Traditional">Chinese (Traditional) -
                                                                            中文（繁體）
                                                                        </option>
                                                                        <option value="Corsican">Corsican</option>
                                                                        <option value="Croatian">Croatian - hrvatski
                                                                        </option>
                                                                        <option value="Czech">Czech - čeština</option>
                                                                        <option value="Danish">Danish - dansk</option>
                                                                        <option value="Dutch">Dutch - Nederlands
                                                                        </option>
                                                                        <option value="English">English</option>
                                                                        <option value="English-Australia">English (Australia)
                                                                        </option>
                                                                        <option value="English-Canada">English (Canada)
                                                                        </option>
                                                                        <option value="English-India">English (India)</option>
                                                                        <option value="English-New-Zealand">English (New Zealand)
                                                                        </option>
                                                                        <option value="English-South-Africa">English (South Africa)
                                                                        </option>
                                                                        <option value="English-United-Kingdom">English (United Kingdom)
                                                                        </option>
                                                                        <option value="English-United-States">English (United States)
                                                                        </option>
                                                                        <option value="Esperanto">Esperanto - esperanto
                                                                        </option>
                                                                        <option value="Estonian">Estonian - eesti
                                                                        </option>
                                                                        <option value="Faroese">Faroese - føroyskt
                                                                        </option>
                                                                        <option value="Filipino">Filipino</option>
                                                                        <option value="Finnish">Finnish - suomi</option>
                                                                        <option value="French">French - français
                                                                        </option>
                                                                        <option value="French-Canada">French (Canada) -
                                                                            français (Canada)
                                                                        </option>
                                                                        <option value="French">French (France) -
                                                                            français (France)
                                                                        </option>
                                                                        <option value="French-Switzerland">French (Switzerland) -
                                                                            français
                                                                            (Suisse)</option>
                                                                        <option value="Galician">Galician - galego
                                                                        </option>
                                                                        <option value="Georgian">Georgian - ქართული
                                                                        </option>
                                                                        <option value="German">German - Deutsch
                                                                        </option>
                                                                        <option value="German-Austria">German (Austria) -
                                                                            Deutsch
                                                                            (Österreich)</option>
                                                                        <option value="German-Germany">German (Germany) -
                                                                            Deutsch
                                                                            (Deutschland)</option>
                                                                        <option value="German-Liechtenstein">German (Liechtenstein) -
                                                                            Deutsch
                                                                            (Liechtenstein)
                                                                        </option>
                                                                        <option value="German-Switzerland">German (Switzerland) -
                                                                            Deutsch
                                                                            (Schweiz)</option>
                                                                        <option value="Greek">Greek - Ελληνικά
                                                                        </option>
                                                                        <option value="Guarani">Guarani</option>
                                                                        <option value="Gujarati">Gujarati - ગુજરાતી
                                                                        </option>
                                                                        <option value="Hausa">Hausa</option>
                                                                        <option value="Hawaiian">Hawaiian - ʻŌlelo
                                                                            Hawaiʻi</option>
                                                                        <option value="Hebrew">Hebrew - עברית</option>
                                                                        <option value="Hindi">Hindi - हिन्दी</option>
                                                                        <option value="Hungarian">Hungarian - magyar
                                                                        </option>
                                                                        <option value="Icelandic">Icelandic - íslenska
                                                                        </option>
                                                                        <option value="Indonesian">Indonesian - Indonesia
                                                                        </option>
                                                                        <option value="Interlingua">Interlingua</option>
                                                                        <option value="Irish">Irish - Gaeilge</option>
                                                                        <option value="Italian">Italian - italiano
                                                                        </option>
                                                                        <option value="Italian-Italy">Italian (Italy) -
                                                                            italiano (Italia)
                                                                        </option>
                                                                        <option value="Italian-Switzerland">Italian (Switzerland) -
                                                                            italiano
                                                                            (Svizzera)</option>
                                                                        <option value="Japanese">Japanese - 日本語</option>
                                                                        <option value="Kannada">Kannada - ಕನ್ನಡ</option>
                                                                        <option value="Kazakh">Kazakh - қазақ тілі
                                                                        </option>
                                                                        <option value="Khmer">Khmer - ខ្មែរ</option>
                                                                        <option value="Korean">Korean - 한국어</option>
                                                                        <option value="Kurdish">Kurdish - Kurdî</option>
                                                                        <option value="Kyrgyz">Kyrgyz - кыргызча
                                                                        </option>
                                                                        <option value="Lao">Lao - ລາວ</option>
                                                                        <option value="Latin">Latin</option>
                                                                        <option value="Latvian">Latvian - latviešu
                                                                        </option>
                                                                        <option value="Lingala">Lingala - lingála
                                                                        </option>
                                                                        <option value="Lithuanian">Lithuanian - lietuvių
                                                                        </option>
                                                                        <option value="Macedonian">Macedonian - македонски
                                                                        </option>
                                                                        <option value="Malay">Malay - Bahasa Melayu
                                                                        </option>
                                                                        <option value="Malayalam">Malayalam - മലയാളം
                                                                        </option>
                                                                        <option value="Maltese">Maltese - Malti</option>
                                                                        <option value="Marathi">Marathi - मराठी</option>
                                                                        <option value="Mongolian">Mongolian - монгол
                                                                        </option>
                                                                        <option value="Nepali">Nepali - नेपाली</option>
                                                                        <option value="Norwegian">Norwegian - norsk
                                                                        </option>
                                                                        <option value="Norwegian-Bokmål">Norwegian Bokmål - norsk
                                                                            bokmål
                                                                        </option>
                                                                        <option value="Norwegian-Nynorsk">Norwegian Nynorsk -
                                                                            nynorsk</option>
                                                                        <option value="Occitan">Occitan</option>
                                                                        <option value="Oriya">Oriya - ଓଡ଼ିଆ</option>
                                                                        <option value="Oromo">Oromo - Oromoo</option>
                                                                        <option value="Pashto">Pashto - پښتو</option>
                                                                        <option value="Persian">Persian - فارسی</option>
                                                                        <option value="Polish">Polish - polski</option>
                                                                        <option value="Portuguese">Portuguese - português
                                                                        </option>
                                                                        <option value="Portuguese-Brazil">Portuguese (Brazil) -
                                                                            português
                                                                            (Brasil)</option>
                                                                        <option value="Portuguese-Portugal">Portuguese (Portugal) -
                                                                            português
                                                                            (Portugal)
                                                                        </option>
                                                                        <option value="Punjabi">Punjabi - ਪੰਜਾਬੀ
                                                                        </option>
                                                                        <option value="Quechua">Quechua</option>
                                                                        <option value="Romanian">Romanian - română
                                                                        </option>
                                                                        <option value="Romanian">Romanian (Moldova) -
                                                                            română
                                                                            (Moldova)</option>
                                                                        <option value="Romansh">Romansh - rumantsch
                                                                        </option>
                                                                        <option value="Russian">Russian - русский
                                                                        </option>
                                                                        <option value="Scottish">Scottish Gaelic</option>
                                                                        <option value="Serbian">Serbian - српски
                                                                        </option>
                                                                        <option value="Serbo">Serbo-Croatian -
                                                                            Srpskohrvatski
                                                                        </option>
                                                                        <option value="Shona">Shona - chiShona
                                                                        </option>
                                                                        <option value="Sindhi">Sindhi</option>
                                                                        <option value="Sinhala">Sinhala - සිංහල</option>
                                                                        <option value="Slovak">Slovak - slovenčina
                                                                        </option>
                                                                        <option value="Slovenian">Slovenian - slovenščina
                                                                        </option>
                                                                        <option value="Somali">Somali - Soomaali
                                                                        </option>
                                                                        <option value="Southern">Southern Sotho</option>
                                                                        <option value="es">Spanish - español
                                                                        </option>
                                                                        <option value="Spanish-Argentina">Spanish (Argentina) -
                                                                            español
                                                                            (Argentina)</option>
                                                                        <option value="Spanish-America">Spanish (Latin America)
                                                                            - español
                                                                            (Latinoamérica)
                                                                        </option>
                                                                        <option value="Spanish-Mexico">Spanish (Mexico) -
                                                                            español (México)
                                                                        </option>
                                                                        <option value="Spanish-Spain">Spanish (Spain) -
                                                                            español (España)
                                                                        </option>
                                                                        <option value="Spanish-United-States">Spanish (United States)
                                                                            - español
                                                                            (Estados Unidos)
                                                                        </option>
                                                                        <option value="Sundanese">Sundanese</option>
                                                                        <option value="Swahili">Swahili - Kiswahili
                                                                        </option>
                                                                        <option value="Swedish">Swedish - svenska
                                                                        </option>
                                                                        <option value="Tajik">Tajik - тоҷикӣ</option>
                                                                        <option value="Tamil">Tamil - தமிழ்</option>
                                                                        <option value="Tatar">Tatar</option>
                                                                        <option value="Telugu">Telugu - తెలుగు</option>
                                                                        <option value="Thai">Thai - ไทย</option>
                                                                        <option value="Tigrinya">Tigrinya - ትግርኛ</option>
                                                                        <option value="Tongan">Tongan - lea fakatonga
                                                                        </option>
                                                                        <option value="Turkish">Turkish - Türkçe
                                                                        </option>
                                                                        <option value="Turkmen">Turkmen</option>
                                                                        <option value="Twi">Twi</option>
                                                                        <option value="Ukrainian">Ukrainian - українська
                                                                        </option>
                                                                        <option value="Urdu">Urdu - اردو</option>
                                                                        <option value="Uyghur">Uyghur</option>
                                                                        <option value="Uzbek">Uzbek - o‘zbek</option>
                                                                        <option value="Vietnamese">Vietnamese - Tiếng Việt
                                                                        </option>
                                                                        <option value="Walloon">Walloon - wa</option>
                                                                        <option value="Welsh">Welsh - Cymraeg</option>
                                                                        <option value="Western">Western Frisian</option>
                                                                        <option value="Xhosa">Xhosa</option>
                                                                        <option value="Yiddish">Yiddish</option>
                                                                        <option value="Yoruba">Yoruba - Èdè Yorùbá
                                                                        </option>
                                                                        <option value="Zulu">Zulu - isiZulu</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Level</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"
                                                                            id="percentage">Level</span>
                                                                        <select id="language_level"
                                                                            name="language_level[]"
                                                                            placeholder="level" class="form-control"
                                                                            aria-describedby="percentage">
                                                                            <option value="">Select level
                                                                            </option>
                                                                            <option value="Native">Native</option>
                                                                            <option value="Fluent">Fluent</option>
                                                                            <option value="Basic">Basic</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Interests --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Intérêts</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_interest">Ajouter un intérêt</button>
                                                </div>
                                            </div>
                                            <section class="interest_section">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="form-outline">
                                                            <label class="form-label fw-bold text-secondary">Ajouter un intérêt</label>
                                                            <input type="text" id="interest" name="interest[]"
                                                                class="form-control" placeholder="Ajouter un intérêt" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>


                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="1"
                                            id="verify" name="verify" required />
                                        <label for="verify" class="form-check-label text-dark"> Es-tu
                                             sûr que tu
                                             envie de créer de nouveaux
                                             profil?
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" id="submitbtn" class="btn btn-lg btn-primary w-100">Créer un profil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

{{ view('layouts.footer') }}
