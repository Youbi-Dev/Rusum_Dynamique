{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">Modifier le profil utilisateur</h1>
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
                        <li class="breadcrumb-item">Modifier le profil utilisateur</li>
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
                        <h3 class="card-title">Modifier le profil utilisateur</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 p-md-5 p-sm-4 p-3">
                                <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Personal Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">Informations personnelles</h2>
                                            <div class="form-outline mb-4">
                                                <input type="hidden" id="user_id" name="user_id" class="form-control"
                                                    value="{{ isset($information['personal_info']['id']) ? $information['personal_info']['id'] : '' }}" />
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="col-12">
                                                                <div class="form-outline mb-4">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Prénom</label>
                                                                    <input type="text" id="first_name"
                                                                        name="first_name" placeholder="Prénom"
                                                                        class="form-control"
                                                                        value="{{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Nom</label>
                                                                    <input type="text" id="last_name"
                                                                        name="last_name" placeholder="Nom"
                                                                        class="form-control"
                                                                        value="{{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}" />
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
                                                                    src="{{ isset($information['personal_info']['image_path']) && !empty($information['personal_info']['image_path']) ? asset('assets/images/' . $information['personal_info']['image_path']) : asset('assets/images/user-thumb.jpg') }}"
                                                                    alt="Profile picture"
                                                                    onclick="$(this).closest('.profile_picture').find('input').click();"
                                                                    style="height:150px; width:150px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">Titre du profil</label>
                                                <input type="text" id="profile_title" name="profile_title"
                                                    class="form-control" placeholder="Profile Title"
                                                    value="{{ isset($information['personal_info']['profile_title']) ? $information['personal_info']['profile_title'] : '' }}" />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">À propos</label>
                                                <textarea class="form-control" placeholder="À propos" id="about_me" name="about_me" rows="4">{{ isset($information['personal_info']['about_me']) ? $information['personal_info']['about_me'] : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Contact Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">Coordonnées</h2>
                                            @foreach ($information['contact_info'] as $contact_info)
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">E-mail</label>
                                                                    <input type="email" id="email"
                                                                        name="email" placeholder="E-mail"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['email']) ? $contact_info['email'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Adresse</label>
                                                                        <input type="text" id="Adresse"
                                                                        name="Adresse" placeholder="Adresse"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['Adresse']) ? $contact_info['Adresse'] : '' }}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Numéro de téléphone</label>
                                                                    <input type="number" id="phone_number"
                                                                        name="phone_number" placeholder="Phone Number"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['phone_number']) ? $contact_info['phone_number'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Site Internet</label>
                                                                    <input type="url" id="website"
                                                                        name="website" class="form-control"
                                                                        placeholder="Site Internet"
                                                                        value="{{ isset($contact_info['website']) ? $contact_info['website'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">LinkedIn</label>
                                                                    <input type="url" id="linkedin_link"
                                                                        name="linkedin_link" class="form-control"
                                                                        placeholder="LinkedIn"
                                                                        value="{{ isset($contact_info['linkedin_link']) ? $contact_info['linkedin_link'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Github</label>
                                                                    <input type="url" id="github_link"
                                                                        name="github_link" class="form-control"
                                                                        placeholder="Github"
                                                                        value="{{ isset($contact_info['github_link']) ? $contact_info['github_link'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Twitter</label>
                                                                    <input type="text" id="twitter"
                                                                        name="twitter" class="form-control"
                                                                        placeholder="Twitter"
                                                                        value="{{ isset($contact_info['twitter']) ? $contact_info['twitter'] : '' }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
                                                @foreach ($information['education_info'] as $edu_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Degré</label>
                                                                <input type="text" id="degree_title"
                                                                    name="degree_title[]" class="form-control"
                                                                    placeholder="Degré"
                                                                    value="{{ isset($edu_info['degree_title']) ? $edu_info['degree_title'] : '' }}" />
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Institut</label>
                                                                <input type="text" id="institute"
                                                                    name="institute[]" class="form-control"
                                                                    placeholder="Institut"
                                                                    value="{{ isset($edu_info['institute']) ? $edu_info['institute'] : '' }}" />
                                                            </div>
                                                            <div class="row mb-4">
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Date de début</label>
                                                                        <input type="date" id="edu_start_date"
                                                                            name="edu_start_date[]"
                                                                            class="form-control"
                                                                            value="{{ isset($edu_info['edu_start_date']) ? $edu_info['edu_start_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Date de fin
                                                                            </label>
                                                                        <input type="date" id="edu_end_date"
                                                                            name="edu_end_date[]" class="form-control"
                                                                            value="{{ isset($edu_info['edu_end_date']) ? $edu_info['edu_end_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Description</label>
                                                                <textarea class="form-control" placeholder="Description" id="education_description" name="education_description[]"
                                                                    rows="4">{{ isset($edu_info['education_description']) ? $edu_info['education_description'] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                                                @foreach ($information['experience_info'] as $exp_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label fw-bold text-secondary">Titre d'emploi</label>
                                                                <input type="text" id="job_title"
                                                                    name="job_title[]" class="form-control"
                                                                    placeholder="Titre d'emploi"
                                                                    value="{{ isset($exp_info['job_title']) ? $exp_info['job_title'] : '' }}" />
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Organisation</label>
                                                                <input type="text" id="organization"
                                                                    name="organization[]" class="form-control"
                                                                    placeholder="Organisation"
                                                                    value="{{ isset($exp_info['organization']) ? $exp_info['organization'] : '' }}" />
                                                            </div>
                                                            <div class="row mb-4">
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Date de début</label>
                                                                        <input type="date" id="job_start_date"
                                                                            name="job_start_date[]"
                                                                            class="form-control"
                                                                            value="{{ isset($exp_info['job_start_date']) ? $exp_info['job_start_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Date de fin</label>
                                                                        <input type="date" id="job_end_date"
                                                                            name="job_end_date[]" class="form-control"
                                                                            value="{{ isset($exp_info['job_end_date']) ? $exp_info['job_end_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label fw-bold text-secondary">Description de l'emploi</label>
                                                                <textarea class="form-control" placeholder="Description de l'emploi" id="job_description" name="job_description[]"
                                                                    rows="4">{{ isset($exp_info['job_description']) ? $exp_info['job_description'] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                                                @foreach ($information['project_info'] as $project_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Project
                                                                    Title</label>
                                                                <input type="text" id="project_title"
                                                                    name="project_title[]" class="form-control"
                                                                    placeholder="Project
                                                                    Title"
                                                                    value="{{ isset($project_info['project_title']) ? $project_info['project_title'] : '' }}" />
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Description du projet</label>
                                                                <textarea class="form-control" placeholder="Description du projet" id="project_description" name="project_description[]"
                                                                    rows="4">{{ isset($project_info['project_description']) ? $project_info['project_description'] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                                                @foreach ($information['skill_info'] as $skill_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Ajouter une compétence</label>
                                                                        <input type="text" id="skill_name"
                                                                            name="skill_name[]" class="form-control"
                                                                            placeholder="Ajouter une compétence"
                                                                            value="{{ isset($skill_info['skill_name']) ? $skill_info['skill_name'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Pourcentage</label>
                                                                        <div class="input-group">
                                                                            <input type="number" step="5"
                                                                                min="0" max="100"
                                                                                id="skill_percentage"
                                                                                name="skill_percentage[]"
                                                                                placeholder="%" class="form-control"
                                                                                aria-describedby="percentage"
                                                                                value="{{ isset($skill_info['skill_percentage']) ? $skill_info['skill_percentage'] : '' }}" />
                                                                            <span class="input-group-text"
                                                                                id="percentage">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Languages --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Langues</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_language">Ajouter une langue</button>
                                                </div>
                                            </div>
                                            <section class="language_section">
                                                @foreach ($information['language_info'] as $language_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Ajouter une langue</label>
                                                                        <select class="form-control" id="language"
                                                                            name="language[]">
                                                                            <option value="">Ajouter une langue
                                                                            </option>
                                                                            <option value="Afrikaans"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Afrikaans' ? 'selected' : '' }}>
                                                                                Afrikaans</option>
                                                                            <option value="Albanian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Albanian' ? 'selected' : '' }}>
                                                                                Albanian - shqip</option>
                                                                            <option value="Amharic"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Amharic' ? 'selected' : '' }}>
                                                                                Amharic - አማርኛ</option>
                                                                            <option value="Arabic"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Arabic' ? 'selected' : '' }}>
                                                                                Arabic - العربية</option>
                                                                            <option value="Aragonese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Aragonese' ? 'selected' : '' }}>
                                                                                Aragonese - aragonés</option>
                                                                            <option value="Armenian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Armenian' ? 'selected' : '' }}>
                                                                                Armenian - հայերեն</option>
                                                                            <option value="Asturian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Asturian' ? 'selected' : '' }}>
                                                                                Asturian - asturianu</option>
                                                                            <option value="Azerbaijani"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Azerbaijani' ? 'selected' : '' }}>
                                                                                Azerbaijani - azərbaycan dili</option>
                                                                            <option value="euskara"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'euskara' ? 'selected' : '' }}>
                                                                                Basque - euskara</option>
                                                                            <option value="Belarusian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Belarusian' ? 'selected' : '' }}>
                                                                                Belarusian - беларуская</option>
                                                                            <option value="Bengali"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Bengali' ? 'selected' : '' }}>
                                                                                Bengali - বাংলা</option>
                                                                            <option value="Bosnian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Bosnian' ? 'selected' : '' }}>
                                                                                Bosnian - bosanski</option>
                                                                            <option value="Breton"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Breton' ? 'selected' : '' }}>
                                                                                Breton - brezhoneg</option>
                                                                            <option value="Bulgarian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Bulgarian' ? 'selected' : '' }}>
                                                                                Bulgarian - български</option>
                                                                            <option value="Catalan"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Catalan' ? 'selected' : '' }}>
                                                                                Catalan - català</option>
                                                                            <option value="Central-Kurdish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Central-Kurdish' ? 'selected' : '' }}>
                                                                                Central Kurdish - کوردی (دەستنوسی
                                                                                عەرەبی)
                                                                            </option>
                                                                            <option value="Chinese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Chinese' ? 'selected' : '' }}>
                                                                                Chinese - 中文</option>
                                                                            <option value=" Chinese-Hong-Kong)"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Chinese-Hong-Kong' ? 'selected' : '' }}>
                                                                                Chinese (Hong Kong) - 中文（香港）</option>
                                                                            <option value="Chinese-Simplified"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Chinese-Simplified' ? 'selected' : '' }}>
                                                                                Chinese (Simplified) - 中文（简体）</option>
                                                                            <option value="Chinese-Traditional"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Chinese-Traditional' ? 'selected' : '' }}>
                                                                                Chinese (Traditional) - 中文（繁體）</option>
                                                                            <option value="Corsican"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Corsican' ? 'selected' : '' }}>
                                                                                Corsican</option>
                                                                            <option value="Croatian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Croatian' ? 'selected' : '' }}>
                                                                                Croatian - hrvatski</option>
                                                                            <option value="Czech"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Czech' ? 'selected' : '' }}>
                                                                                Czech - čeština</option>
                                                                            <option value="Danish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Danish' ? 'selected' : '' }}>
                                                                                Danish - dansk</option>
                                                                            <option value="Dutch"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Dutch' ? 'selected' : '' }}>
                                                                                Dutch - Nederlands</option>
                                                                            <option value="English"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English' ? 'selected' : '' }}>
                                                                                English</option>
                                                                            <option value="English-Australia"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-Australia' ? 'selected' : '' }}>
                                                                                English (Australia)</option>
                                                                            <option value="English-Canada"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-Canada' ? 'selected' : '' }}>
                                                                                English (Canada)</option>
                                                                            <option value="English-India"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-India' ? 'selected' : '' }}>
                                                                                English (India)</option>
                                                                            <option value="English-New-Zealand"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-New-Zealand' ? 'selected' : '' }}>
                                                                                English (New Zealand)</option>
                                                                            <option value="English-South-Africa"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-South-Africa' ? 'selected' : '' }}>
                                                                                English (South Africa)</option>
                                                                            <option value="English-United-Kingdom"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-United-Kingdom' ? 'selected' : '' }}>
                                                                                English (United Kingdom)</option>
                                                                            <option value="English-United-States"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'English-United-States' ? 'selected' : '' }}>
                                                                                English (United States)</option>
                                                                            <option value="Esperanto"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Esperanto' ? 'selected' : '' }}>
                                                                                Esperanto - esperanto</option>
                                                                            <option value="Estonian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Estonian' ? 'selected' : '' }}>
                                                                                Estonian - eesti</option>
                                                                            <option value="Faroese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Faroese' ? 'selected' : '' }}>
                                                                                Faroese - føroyskt</option>
                                                                            <option value="Filipino"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Filipino' ? 'selected' : '' }}>
                                                                                Filipino</option>
                                                                            <option value="Finnish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Finnish' ? 'selected' : '' }}>
                                                                                Finnish - suomi</option>
                                                                            <option value="French"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'French' ? 'selected' : '' }}>
                                                                                French - français</option>
                                                                            <option value="French-Canada"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'French-Canada' ? 'selected' : '' }}>
                                                                                French (Canada) - français (Canada)
                                                                            </option>
                                                                            <option value="French"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'French' ? 'selected' : '' }}>
                                                                                French (France) - français (France)
                                                                            </option>
                                                                            <option value="French-Switzerland"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'French-Switzerland' ? 'selected' : '' }}>
                                                                                French (Switzerland) - français (Suisse)
                                                                            </option>
                                                                            <option value="Galician"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Galician' ? 'selected' : '' }}>
                                                                                Galician - galego</option>
                                                                            <option value="Georgian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Georgian' ? 'selected' : '' }}>
                                                                                Georgian - ქართული</option>
                                                                            <option value="de"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'de' ? 'selected' : '' }}>
                                                                                German - Deutsch</option>
                                                                            <option value="German"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'German' ? 'selected' : '' }}>
                                                                                German (Austria) - Deutsch (Österreich)
                                                                            </option>
                                                                            <option value="German-Germany"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'German-Germany' ? 'selected' : '' }}>
                                                                                German (Germany) - Deutsch (Deutschland)
                                                                            </option>
                                                                            <option value="German-Liechtenstein"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'German-Liechtenstein' ? 'selected' : '' }}>
                                                                                German (Liechtenstein) - Deutsch
                                                                                (Liechtenstein)
                                                                            </option>
                                                                            <option value="German-Switzerland"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'German-Switzerland' ? 'selected' : '' }}>
                                                                                German (Switzerland) - Deutsch (Schweiz)
                                                                            </option>
                                                                            <option value="Greek"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Greek' ? 'selected' : '' }}>
                                                                                Greek - Ελληνικά</option>
                                                                            <option value="Guarani"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Guarani' ? 'selected' : '' }}>
                                                                                Guarani</option>
                                                                            <option value="Gujarati"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Gujarati' ? 'selected' : '' }}>
                                                                                Gujarati - ગુજરાતી</option>
                                                                            <option value="Hausa"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Hausa' ? 'selected' : '' }}>
                                                                                Hausa</option>
                                                                            <option value="Hawaiian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Hawaiian' ? 'selected' : '' }}>
                                                                                Hawaiian - ʻŌlelo Hawaiʻi</option>
                                                                            <option value="Hebrew"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'he' ? 'selected' : '' }}>
                                                                                Hebrew - עברית</option>
                                                                            <option value="Hindi"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Hindi' ? 'selected' : '' }}>
                                                                                Hindi - हिन्दी</option>
                                                                            <option value="Hungarian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Hungarian' ? 'selected' : '' }}>
                                                                                Hungarian - magyar</option>
                                                                            <option value="Icelandic"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Icelandic' ? 'selected' : '' }}>
                                                                                Icelandic - íslenska</option>
                                                                            <option value="Indonesian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Indonesian' ? 'selected' : '' }}>
                                                                                Indonesian - Indonesia</option>
                                                                            <option value="Interlingua"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Interlingua' ? 'selected' : '' }}>
                                                                                Interlingua</option>
                                                                            <option value="Irish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Irish' ? 'selected' : '' }}>
                                                                                Irish - Gaeilge</option>
                                                                            <option value="Italian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Italian' ? 'selected' : '' }}>
                                                                                Italian - italiano</option>
                                                                            <option value="Italian-Italy"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Italian-Italy' ? 'selected' : '' }}>
                                                                                Italian (Italy) - italiano (Italia)
                                                                            </option>
                                                                            <option value="Italian-Switzerland"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Italian-Switzerland' ? 'selected' : '' }}>
                                                                                Italian (Switzerland) - italiano
                                                                                (Svizzera)
                                                                            </option>
                                                                            <option value="Italian-Switzerland"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Italian-Switzerland' ? 'selected' : '' }}>
                                                                                Japanese - 日本語</option>
                                                                            <option value="Kannada"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Kannada' ? 'selected' : '' }}>
                                                                                Kannada - ಕನ್ನಡ</option>
                                                                            <option value="Kazakh"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Kazakh' ? 'selected' : '' }}>
                                                                                Kazakh - қазақ тілі</option>
                                                                            <option value="Khmer"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Khmer' ? 'selected' : '' }}>
                                                                                Khmer - ខ្មែរ</option>
                                                                            <option value="Korean"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Korean' ? 'selected' : '' }}>
                                                                                Korean - 한국어</option>
                                                                            <option value="Kurdish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Kurdish' ? 'selected' : '' }}>
                                                                                Kurdish - Kurdî</option>
                                                                            <option value="Kyrgyz"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Kyrgyz' ? 'selected' : '' }}>
                                                                                Kyrgyz - кыргызча</option>
                                                                            <option value="Lao"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Lao' ? 'selected' : '' }}>
                                                                                Lao - ລາວ</option>
                                                                            <option value="Latin"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Latin' ? 'selected' : '' }}>
                                                                                Latin</option>
                                                                            <option value="Latvian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Latvian' ? 'selected' : '' }}>
                                                                                Latvian - latviešu</option>
                                                                            <option value="Lingala"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Lingala' ? 'selected' : '' }}>
                                                                                Lingala - lingála</option>
                                                                            <option value="Lithuanian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Lithuanian' ? 'selected' : '' }}>
                                                                                Lithuanian - lietuvių</option>
                                                                            <option value="Macedonian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Macedonian' ? 'selected' : '' }}>
                                                                                Macedonian - македонски</option>
                                                                            <option value="Malay"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Malay' ? 'selected' : '' }}>
                                                                                Malay - Bahasa Melayu</option>
                                                                            <option value="Malayalam"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Malayalam' ? 'selected' : '' }}>
                                                                                Malayalam - മലയാളം</option>
                                                                            <option value="Maltese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Maltese' ? 'selected' : '' }}>
                                                                                Maltese - Malti</option>
                                                                            <option value="Marathi"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Marathi' ? 'selected' : '' }}>
                                                                                Marathi - मराठी</option>
                                                                            <option value="Mongolian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Mongolian' ? 'selected' : '' }}>
                                                                                Mongolian - монгол</option>
                                                                            <option value="Nepali"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Nepali' ? 'selected' : '' }}>
                                                                                Nepali - नेपाली</option>
                                                                            <option value="Norwegian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Norwegian' ? 'selected' : '' }}>
                                                                                Norwegian - norsk</option>
                                                                            <option value=" Norwegian-Bokmål"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Norwegian-Bokmål' ? 'selected' : '' }}>
                                                                                Norwegian Bokmål - norsk bokmål</option>
                                                                            <option value="Norwegian-Nynorsk"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Norwegian-Nynorsk' ? 'selected' : '' }}>
                                                                                Norwegian Nynorsk - nynorsk</option>
                                                                            <option value="Occitan"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Occitan' ? 'selected' : '' }}>
                                                                                Occitan</option>
                                                                            <option value="Oriya"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Oriya' ? 'selected' : '' }}>
                                                                                Oriya - ଓଡ଼ିଆ</option>
                                                                            <option value="Oromo"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Oromo' ? 'selected' : '' }}>
                                                                                Oromo - Oromoo</option>
                                                                            <option value="Pashto"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Pashto' ? 'selected' : '' }}>
                                                                                Pashto - پښتو</option>
                                                                            <option value="Persian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Persian' ? 'selected' : '' }}>
                                                                                Persian - فارسی</option>
                                                                            <option value="Polish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Polish' ? 'selected' : '' }}>
                                                                                Polish - polski</option>
                                                                            <option value="Portuguese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Portuguese' ? 'selected' : '' }}>
                                                                                Portuguese - português</option>
                                                                            <option value="Portuguese-Brazil"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Portuguese-Brazil' ? 'selected' : '' }}>
                                                                                Portuguese (Brazil) - português (Brasil)
                                                                            </option>
                                                                            <option value="Portuguese-português"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Portuguese-português' ? 'selected' : '' }}>
                                                                                Portuguese (Portugal) - português
                                                                                (Portugal)
                                                                            </option>
                                                                            <option value="Punjabi"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Punjabi' ? 'selected' : '' }}>
                                                                                Punjabi - ਪੰਜਾਬੀ</option>
                                                                            <option value="Quechua"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Quechua' ? 'selected' : '' }}>
                                                                                Quechua</option>
                                                                            <option value="Romanian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Romanian' ? 'selected' : '' }}>
                                                                                Romanian - română</option>
                                                                            <option value="Romanian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Romanian' ? 'selected' : '' }}>
                                                                                Romanian (Moldova) - română (Moldova)
                                                                            </option>
                                                                            <option value="Romansh"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Romansh' ? 'selected' : '' }}>
                                                                                Romansh - rumantsch</option>
                                                                            <option value="Russian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Russian' ? 'selected' : '' }}>
                                                                                Russian - русский</option>
                                                                            <option value="Scottish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Scottish' ? 'selected' : '' }}>
                                                                                Scottish Gaelic</option>
                                                                            <option value="Serbian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Serbian' ? 'selected' : '' }}>
                                                                                Serbian - српски</option>
                                                                            <option value="Serbo-Croatian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Serbo-Croatian' ? 'selected' : '' }}>
                                                                                Serbo-Croatian - Srpskohrvatski</option>
                                                                            <option value="Shona"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Shona' ? 'selected' : '' }}>
                                                                                Shona - chiShona</option>
                                                                            <option value="Sindhi"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Sindhi' ? 'selected' : '' }}>
                                                                                Sindhi</option>
                                                                            <option value="Sinhala"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Sinhala' ? 'selected' : '' }}>
                                                                                Sinhala - සිංහල</option>
                                                                            <option value="Slovak"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Slovak' ? 'selected' : '' }}>
                                                                                Slovak - slovenčina</option>
                                                                            <option value="Slovenian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Slovenian' ? 'selected' : '' }}>
                                                                                Slovenian - slovenščina</option>
                                                                            <option value="Somali"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Somali' ? 'selected' : '' }}>
                                                                                Somali - Soomaali</option>
                                                                            <option value="Southern"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Southern' ? 'selected' : '' }}>
                                                                                Southern Sotho</option>
                                                                            <option value="Spanish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Spanish' ? 'selected' : '' }}>
                                                                                Spanish - español</option>
                                                                            <option value="Spanish-Argentina"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'panish-Argentina' ? 'selected' : '' }}>
                                                                                Spanish (Argentina) - español
                                                                                (Argentina)
                                                                            </option>
                                                                            <option value="Spanish-Latinoamérica"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'panish-Latinoamérica' ? 'selected' : '' }}>
                                                                                Spanish (Latin America) - español
                                                                                (Latinoamérica)
                                                                            </option>
                                                                            <option value="Spanish-Mexico"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Spanish-Mexico' ? 'selected' : '' }}>
                                                                                Spanish (Mexico) - español (México)
                                                                            </option>
                                                                            <option value="Spanish-Spain"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Spanish-Spain' ? 'selected' : '' }}>
                                                                                Spanish (Spain) - español (España)
                                                                            </option>
                                                                            <option value="Spanish-United-States"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'es-US' ? 'selected' : '' }}>
                                                                                Spanish (United States) - español
                                                                                (Estados
                                                                                Unidos)
                                                                            </option>
                                                                            <option value="Sundanese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Sundanese' ? 'selected' : '' }}>
                                                                                Sundanese</option>
                                                                            <option value="Swahili"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Swahili' ? 'selected' : '' }}>
                                                                                Swahili - Kiswahili</option>
                                                                            <option value="Swedish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Swedish' ? 'selected' : '' }}>
                                                                                Swedish - svenska</option>
                                                                            <option value="Tajik"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Tajik' ? 'selected' : '' }}>
                                                                                Tajik - тоҷикӣ</option>
                                                                            <option value="Tamil"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Tamil' ? 'selected' : '' }}>
                                                                                Tamil - தமிழ்</option>
                                                                            <option value="Tatar"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Tatar' ? 'selected' : '' }}>
                                                                                Tatar</option>
                                                                            <option value="Telugu"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Telugu' ? 'selected' : '' }}>
                                                                                Telugu - తెలుగు</option>
                                                                            <option value="Thai"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Thai' ? 'selected' : '' }}>
                                                                                Thai - ไทย</option>
                                                                            <option value="Tigrinya"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Tigrinya' ? 'selected' : '' }}>
                                                                                Tigrinya - ትግርኛ</option>
                                                                            <option value="Tongan"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Tongan' ? 'selected' : '' }}>
                                                                                Tongan - lea fakatonga</option>
                                                                            <option value="Turkish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Turkish' ? 'selected' : '' }}>
                                                                                Turkish - Türkçe</option>
                                                                            <option value="Turkmen"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Turkmen' ? 'selected' : '' }}>
                                                                                Turkmen</option>
                                                                            <option value="Twi"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Twi' ? 'selected' : '' }}>
                                                                                Twi</option>
                                                                            <option value="Ukrainian"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Ukrainian' ? 'selected' : '' }}>
                                                                                Ukrainian - українська</option>
                                                                            <option value="Urdu"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Urdu' ? 'selected' : '' }}>
                                                                                Urdu - اردو</option>
                                                                            <option value="Uyghur"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Uyghur' ? 'selected' : '' }}>
                                                                                Uyghur</option>
                                                                            <option value="Uzbek"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Uzbek' ? 'selected' : '' }}>
                                                                                Uzbek - o‘zbek</option>
                                                                            <option value="Vietnamese"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Vietnamese' ? 'selected' : '' }}>
                                                                                Vietnamese - Tiếng Việt</option>
                                                                            <option value="Walloon"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Walloon' ? 'selected' : '' }}>
                                                                                Walloon - wa</option>
                                                                            <option value="v"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Welsh' ? 'selected' : '' }}>
                                                                                Welsh - Cymraeg</option>
                                                                            <option value="Western"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Western' ? 'selected' : '' }}>
                                                                                Western Frisian</option>
                                                                            <option value="Xhosa"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Xhosa' ? 'selected' : '' }}>
                                                                                Xhosa</option>
                                                                            <option value="Yiddish"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Yiddish' ? 'selected' : '' }}>
                                                                                Yiddish</option>
                                                                            <option value="Yoruba"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Yoruba' ? 'selected' : '' }}>
                                                                                Yoruba - Èdè Yorùbá</option>
                                                                            <option value="Zulu"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == 'Zulu' ? 'selected' : '' }}>
                                                                                Zulu - isiZulu</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Niveau</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"
                                                                                id="percentage">Niveau</span>
                                                                            <select id="language_level"
                                                                                name="language_level[]"
                                                                                placeholder="level"
                                                                                class="form-control"
                                                                                aria-describedby="percentage">
                                                                                <option value="">Choisir le niveau
                                                                                </option>
                                                                                <option value="Indigène"
                                                                                    {{ isset($language_info['language_level']) && $language_info['language_level'] == 'Indigène' ? 'selected' : '' }}>
                                                                                    Indigène</option>
                                                                                <option value="Courante"
                                                                                    {{ isset($language_info['language_level']) && $language_info['language_level'] == 'Courante' ? 'selected' : '' }}>
                                                                                    Courante</option>
                                                                                <option value="Basique"
                                                                                    {{ isset($language_info['language_level']) && $language_info['language_level'] == 'Basique' ? 'selected' : '' }}>
                                                                                    Basique</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                                                @foreach ($information['interest_info'] as $interest_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline">
                                                                <label class="form-label fw-bold text-secondary">Ajouter un intérêt</label>
                                                                <input type="text" id="interest"
                                                                    name="interest[]" class="form-control"
                                                                    placeholder="Ajouter un intérêt"
                                                                    value="{{ isset($interest_info['interest']) ? $interest_info['interest'] : '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>


                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="1"
                                            id="verify" name="verify" required />
                                        <label for="verify" class="form-check-label text-dark"> Est-tu sûr que tu
souhaitez-vous enregistrer ces modifications ?
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" id="submitbtn" class="btn btn-lg btn-success w-100">Sauvegarder les modifications</button>
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
