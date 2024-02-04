$(document).ready(function () {
    $("#add_education").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Degré</label>
                <input type="text" id="degree_title" name="degree_title[]"
                    class="form-control" placeholder="Degree" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Institut</label>
                    <input type="text" id="institute" name="institute[]"
                    class="form-control" placeholder="Institute" />
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-12">
                <div class="form-outline">
                <label class="form-label fw-bold text-secondary">Date de début</label>
                        <input type="date" id="edu_start_date"
                            name="edu_start_date[]" class="form-control" />
                    </div>
                    </div>
                    <div class="col-sm-6 col-12">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">Date de fin</label>
                        <input type="date" id="edu_end_date"
                        name="edu_end_date[]" class="form-control" />
                    </div>
                    </div>
            </div>
            <div class="form-outline mb-4">
            <label class="form-label fw-bold text-secondary">Description du diplôme</label>
                    <textarea class="form-control" placeholder="Descripton" id="education_description" name="education_description[]"
                    rows="4"></textarea>
            </div>
        </div>
        </div>`;

        $(".education_section").append(html);

    });

    $("#add_experience").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Titre d'emploi</label>
                <input type="text" id="job_title" name="job_title[]"
                    class="form-control" placeholder="Job Title" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Organisation</label>
                <input type="text" id="organization"
                    name="organization[]" class="form-control"
                    placeholder="Organization" />
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-12">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">Date de début</label>
                        <input type="date" id="job_start_date"
                            name="job_start_date[]"
                            class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">Date de fin</label>
                        <input type="date" id="job_end_date"
                            name="job_end_date[]" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Description de l'emploi</label>
                <textarea class="form-control" placeholder="Job Descripton" id="job_description" name="job_description[]"
                    rows="4"></textarea>
            </div>
        </div>
        </div>`;

        $(".experience_section").append(html);

    });

    $("#add_project").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Titre du projet</label>
                <input type="text" id="project_title"
                    name="project_title[]" class="form-control"
                    placeholder="Titre du projet" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Description du projet</label>
                <textarea class="form-control" placeholder="Description du projet" id="project_description"
                    name="project_description[]" rows="4"></textarea>
            </div>
        </div>
        </div>`;

        $(".project_section").append(html);

    });

    $("#add_skill").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="row">
                <div class="col-10">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">Ajouter une compétence</label>
                        <input type="text" id="skill_name" name="skill_name[]" class="form-control" placeholder="Ajouter une compétence" value="" />
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline">
                    <label class="form-label fw-bold text-secondary">Pourcentage</label>
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
        </div>`;

        $(".skill_section").append(html);

    });

    $("#add_language").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
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
                                <option value="Native">Indigène</option>
                                <option value="Fluent">Courante</option>
                                <option value="Basic">Basique</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>`;

        $(".language_section").append(html);

    });

    $("#add_interest").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="form-outline">
                <label class="form-label fw-bold text-secondary">Ajouter un intérêt</label>
                <input type="text" id="interest" name="interest[]"
                    class="form-control" placeholder="Ajouter un intérêt" />
            </div>
        </div>
        </div>`;

        $(".interest_section").append(html);

    });


});

function remove_section(element) {
    $(element).closest(".card").remove();
}