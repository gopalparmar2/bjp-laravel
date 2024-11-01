<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BJP | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('frontAssets/css/styles.css') }}">

    <style>
      input {
         outline:0;
      }

      .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #f5821f;
    background-color: #ffffff;
    border-bottom:1px solid #f5821f;
}

.selected-language ,.nav-link:focus, .nav-link:hover {
    color: #f5821f;
}

.nav-pills .nav-link {
    border-radius:0px;
}
    </style>
</head>

<body>
    <div id="app">
        <div class="bg-white main-container">
            <div class="d-flex align-style align-items-center  secondary-container fixed-position">
                <div class="d-flex align-items-center " style="column-gap: 6px;">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.45277 10.8543C2.27011 10.6547 2.27952 10.4711 2.35296 10.263C2.51585 9.80449 2.84258 9.49001 3.22485 9.21884L3.35761 9.12468C3.3118 9.08548 3.26301 9.0499 3.21167 9.01828C2.68439 8.7537 2.30777 8.33283 1.99329 7.84981C1.52251 7.12104 1.28523 6.30376 1.1553 5.4573C1.09679 5.05864 1.07065 4.65591 1.07715 4.25304C1.08562 3.05537 0.784322 1.95845 0.0762667 0.982991C0.050128 0.943919 0.0268421 0.903012 0.00659091 0.860588C0.000941534 0.851173 0.00659094 0.83799 0 0.802211C0.188312 0.613899 0.454775 0.588477 0.708055 0.591301C0.944551 0.59776 1.17969 0.629322 1.40952 0.685458C2.30252 0.892433 3.10551 1.38056 3.70034 2.07803C3.85664 2.25504 4.01576 2.43017 4.18525 2.61943C4.28798 2.39829 4.31062 2.14831 4.24927 1.91231C4.14937 1.48309 3.95652 1.08101 3.68433 0.734419C3.6495 0.68734 3.61183 0.640263 3.58076 0.591301C3.5704 0.574353 3.58076 0.545165 3.58076 0.489612C3.64926 0.464366 3.71983 0.445147 3.79167 0.432177C4.59294 0.350261 5.28311 0.636496 5.91301 1.09692C6.44 1.46641 6.87782 1.94893 7.19448 2.50926C7.2325 2.56859 7.27499 2.62494 7.32159 2.6778C7.75471 1.74377 8.32247 0.888835 8.90247 0C9.49001 0.699581 9.84404 1.49991 10.2207 2.28611C10.4749 1.99517 10.6914 1.71553 10.9438 1.46601C11.441 0.952861 12.0595 0.573329 12.7422 0.362502C12.8879 0.312526 13.0425 0.293496 13.196 0.306628C13.3496 0.31976 13.4987 0.364765 13.6338 0.438768C13.2572 1.16377 13.002 1.9142 13.2572 2.75972C13.5208 2.3145 13.8561 1.91588 14.2496 1.57994C14.8315 1.07056 15.484 0.716529 16.2749 0.631789C16.5423 0.591952 16.8146 0.598002 17.0799 0.649678C17.1725 0.677106 17.2631 0.710765 17.3511 0.750425C17.3511 0.907666 17.257 0.998998 17.1722 1.09504C16.7599 1.54322 16.4896 2.10347 16.3954 2.70511C16.3455 3.17834 16.3455 3.65552 16.3954 4.12875C16.4507 4.72993 16.4475 5.33504 16.386 5.93561C16.2919 6.72275 15.9924 7.41951 15.5763 8.0739C15.4207 8.2975 15.2492 8.50958 15.0631 8.70851C14.9558 8.83374 14.8324 8.94484 14.7006 9.07854C14.839 9.22166 14.9577 9.35065 15.0829 9.47306C15.2578 9.65219 15.387 9.87084 15.4595 10.1105C15.5037 10.2337 15.5201 10.3651 15.5074 10.4954C15.4947 10.6256 15.4532 10.7514 15.3861 10.8637C15.3446 10.8459 15.3032 10.8411 15.2825 10.8186C14.9812 10.4768 14.5424 10.5521 14.1715 10.7658C13.9519 10.9062 13.7424 11.0616 13.5444 11.231C13.168 11.5408 12.7148 11.7428 12.2328 11.8157C11.8148 11.8765 11.3884 11.8351 10.9899 11.6951C10.8775 11.6621 10.7574 11.6671 10.6481 11.7093C10.2329 11.874 9.86287 12.0963 9.6642 12.5322C9.5745 12.6984 9.52394 12.883 9.51637 13.0717C9.51637 13.2506 9.51637 13.4286 9.51637 13.6075C9.51768 14.3548 9.41888 15.099 9.2226 15.8201C9.14929 16.0478 9.06444 16.2715 8.96838 16.4905C9.184 16.4905 9.39679 16.5056 9.60676 16.4905C9.81673 16.4755 9.82238 16.4566 9.98339 16.6336C9.87228 16.9999 9.84968 17.0187 9.50507 17.0197C9.2678 17.0197 9.02958 17.0253 8.79137 17.0197C8.44111 17.0093 8.27633 16.7071 8.45146 16.4067C8.67319 16.0146 8.80986 15.5803 8.85257 15.1318C8.91 14.6272 8.94672 14.1206 8.99004 13.614C9.00039 13.4822 9.04088 13.324 8.84598 13.2431C8.75182 13.3645 8.79513 13.4973 8.78948 13.6197C8.76218 14.2666 8.74429 14.9153 8.57858 15.5461C8.44958 16.0367 8.23491 16.4764 7.83474 16.8125C7.6055 17.0026 7.32759 17.1246 7.03253 17.1647C6.70794 17.2263 6.37482 17.2283 6.04954 17.1703C5.89905 17.1436 5.75318 17.0954 5.61642 17.0272C5.47519 16.95 5.46671 16.8267 5.57122 16.6977C5.73506 16.4952 5.93184 16.3493 6.21149 16.3738C6.4224 16.3917 6.63425 16.4133 6.84516 16.4331C6.90448 16.4387 6.96379 16.4444 7.02311 16.4453C7.21143 16.4453 7.39974 16.4453 7.58805 16.4453C7.99957 15.8846 8.24053 15.217 8.28198 14.5227C8.31306 14.2193 8.31306 13.9136 8.28198 13.6103C8.23114 13.2195 8.15864 12.8354 7.91383 12.5162C7.78794 12.3602 7.6438 12.2198 7.48448 12.0981C7.35643 11.9946 7.19542 11.9334 7.0636 11.8336C6.81126 11.6452 6.56928 11.5662 6.24727 11.7036C6.06366 11.7818 5.82074 11.7676 5.61454 11.7356C5.21814 11.6744 4.82551 11.5935 4.48466 11.3534C4.2101 11.1667 3.92426 10.9972 3.62878 10.8459C3.47092 10.7641 3.30023 10.7099 3.1241 10.6858C2.98402 10.6805 2.8441 10.6999 2.71076 10.7432C2.62165 10.7726 2.53532 10.8097 2.45277 10.8543ZM8.89965 1.07903C8.39024 1.80585 7.94029 2.57257 7.55415 3.37173C7.22541 4.02915 6.96876 4.72019 6.78867 5.43281C6.62672 6.11545 6.5062 6.79808 6.65214 7.50425C6.80938 8.25185 7.14552 8.89023 7.79331 9.3177C8.3865 9.71033 9.04276 9.79696 9.68773 9.48153C10.4589 9.10491 10.8402 8.41663 10.9984 7.59841C11.0784 7.17941 11.0549 6.75948 11.0229 6.33012C10.9665 5.66941 10.8273 5.0184 10.6086 4.39239C10.2425 3.3 9.72862 2.26283 9.08137 1.30971C9.03052 1.23345 8.96932 1.1666 8.89965 1.07903ZM0.847406 1.24098C1.00371 1.58088 1.17789 1.90007 1.30501 2.24751C1.62702 3.1128 1.70423 4.0233 1.71364 4.93473C1.72118 5.68798 1.86618 6.39227 2.23904 7.04665C2.56952 7.62854 2.94991 8.17088 3.55157 8.50984C4.00352 8.76595 4.47901 8.87893 5.01194 8.67273C4.90083 8.52867 4.79914 8.4138 4.71534 8.28763C4.41492 7.81808 4.18908 7.3048 4.04589 6.76607C3.8717 6.15405 3.83781 5.52791 3.82745 4.90554C3.81804 4.41499 3.93761 3.92255 3.98846 3.43011C4.00277 3.32659 3.98223 3.22126 3.93008 3.13069C3.36326 2.35579 2.66274 1.74848 1.7626 1.40199C1.47454 1.27679 1.16091 1.22162 0.847406 1.24098ZM12.6847 9.06348C12.6998 9.08043 12.7139 9.10962 12.7318 9.11338C13.2167 9.21507 13.6734 9.16329 14.0933 8.87799C14.7194 8.44958 15.129 7.84227 15.436 7.16717C15.6481 6.74152 15.7723 6.27753 15.8013 5.80285C15.8126 5.44882 15.8531 5.09385 15.839 4.74077C15.8211 4.2568 15.7222 3.77378 15.7354 3.29264C15.7486 2.8115 15.8154 2.35108 16.0489 1.91985C16.1845 1.67221 16.3314 1.43117 16.4933 1.15436C16.3696 1.15333 16.2459 1.1612 16.1233 1.17789C15.5173 1.30792 14.9596 1.60469 14.5132 2.03472C14.1043 2.43207 13.7639 2.89434 13.5058 3.40281C13.4825 3.44921 13.469 3.49993 13.4663 3.55178C13.4635 3.60363 13.4715 3.65549 13.4898 3.70411C13.7082 4.60424 13.8513 5.51379 13.7995 6.44594C13.7714 7.12421 13.5659 7.78326 13.2035 8.35731C13.0491 8.60306 12.8608 8.82903 12.6847 9.06348ZM12.8514 1.12611C12.6188 1.08091 12.6198 1.08374 12.4974 1.12611C11.6641 1.39728 11.085 1.97351 10.6331 2.69569C10.554 2.82186 10.5785 2.93579 10.6387 3.06479C10.796 3.39716 10.9475 3.73235 11.086 4.0732C11.3828 4.82287 11.5693 5.61164 11.6396 6.41486C11.6669 6.75793 11.6574 7.10294 11.6113 7.44399C11.537 8.07013 11.2347 8.61341 10.9221 9.14728C10.876 9.22543 10.8402 9.31017 10.7931 9.40432C11.0153 9.48059 11.1989 9.38643 11.3581 9.32147C12.4738 8.87893 13.1122 8.02305 13.2628 6.85928C13.3624 6.12691 13.3254 5.38243 13.1536 4.66356C13.0595 4.29635 12.9653 3.93008 12.8834 3.56099C12.7958 3.1693 12.7054 2.77573 12.6508 2.37839C12.5981 1.94621 12.7224 1.53286 12.8533 1.12611H12.8514ZM6.85552 9.22355C6.42214 8.58525 6.15986 7.8464 6.09379 7.07772C6.05518 6.74679 6.05518 6.41249 6.09379 6.08155C6.18046 5.44874 6.33839 4.82776 6.56457 4.23044C6.6785 3.93291 6.80279 3.63914 6.9186 3.35196C6.54143 2.6452 6.03858 2.01312 5.4347 1.48673C5.1349 1.22393 4.77445 1.03982 4.3858 0.950978C4.79632 1.58371 4.88012 2.2428 4.73794 2.94238C4.65132 3.36985 4.56375 3.79826 4.49596 4.2295C4.36754 5.01596 4.40247 5.82045 4.59859 6.59282C4.79907 7.43041 5.26071 8.18256 5.91678 8.74052C6.18515 8.97665 6.50862 9.14146 6.8574 9.21978L6.85552 9.22355ZM10.5276 9.88264C10.0267 10.038 9.54179 10.1764 9.02111 10.1717C8.49962 10.1771 7.9805 10.1009 7.4826 9.94572C7.36302 9.90524 7.2585 9.88452 7.16341 9.99657C7.02446 10.1693 6.95028 10.3852 6.95372 10.6068C6.95716 10.8284 7.038 11.0419 7.18224 11.2102C7.27982 11.3133 7.39177 11.4018 7.51461 11.4729C7.86991 11.6672 8.17392 11.9431 8.40156 12.278C8.44146 12.337 8.49003 12.3897 8.54562 12.4343C8.80361 12.6518 9.03994 12.6169 9.2339 12.3345C9.28046 12.2665 9.32169 12.195 9.35725 12.1207C9.45784 11.8924 9.62654 11.7006 9.84027 11.5718C9.98339 11.4908 10.1359 11.424 10.2866 11.3571C10.9381 11.069 11.0643 10.3591 10.5286 9.88829L10.5276 9.88264ZM3.01206 10.2084C3.1426 10.1859 3.27514 10.1771 3.40751 10.1821C3.75006 10.2316 4.07265 10.3735 4.3406 10.5926C4.42919 10.6706 4.52363 10.7417 4.62307 10.8054C5.17671 11.1387 5.75295 11.3355 6.41204 11.118C6.39415 10.8581 6.33012 10.6039 6.37344 10.3694C6.41675 10.135 6.56928 9.90994 6.66344 9.70186C6.34896 9.56816 6.04201 9.44481 5.74071 9.3064C5.67877 9.27306 5.61074 9.25253 5.54069 9.24606C5.47064 9.23959 5.40001 9.2473 5.33301 9.26874C4.96152 9.40094 4.55922 9.42027 4.17677 9.32429C4.09725 9.30294 4.01281 9.30959 3.93761 9.34312C3.55047 9.534 3.22868 9.83547 3.013 10.2094L3.01206 10.2084ZM14.7693 10.1284C14.5989 9.59923 14.3259 9.43634 13.8391 9.56345C13.6442 9.61241 13.4512 9.67079 13.2544 9.70939C12.9069 9.77718 12.5651 9.83368 12.2008 9.75459C11.8835 9.68491 11.5417 9.67267 11.2102 9.86757C11.4532 10.3054 11.3986 10.7517 11.2338 11.1933C11.2807 11.2238 11.3313 11.2481 11.3844 11.2658C12.0539 11.3656 12.6876 11.3091 13.2214 10.8299C13.663 10.4335 14.1441 10.1237 14.7703 10.1293L14.7693 10.1284ZM7.03535 16.6807C6.69733 16.7965 6.38473 16.6647 6.04201 16.8078C6.55045 16.9095 6.76795 16.8841 7.03535 16.6807Z"
                            fill="white"></path>
                        <path
                            d="M5.79297 17.7734C5.86076 17.522 6.03401 17.5126 6.1969 17.4909C6.24217 17.4821 6.28887 17.4837 6.33343 17.4956C6.7383 17.6397 7.12434 17.5211 7.50567 17.4015C7.57264 17.3787 7.64407 17.3723 7.71401 17.3828C7.78395 17.3933 7.85036 17.4204 7.90772 17.4617C8.04142 17.5493 8.04895 17.7056 7.90772 17.7753C7.73816 17.8551 7.55807 17.9103 7.37291 17.9391C6.95443 18.0079 6.52542 17.9716 6.1244 17.8337C6.01545 17.8059 5.9047 17.7858 5.79297 17.7734Z"
                            fill="white"></path>
                        <path
                            d="M11.3969 18.0529C11.347 18.1543 11.268 18.2386 11.1701 18.2951C11.0722 18.3516 10.9598 18.3777 10.847 18.3702C10.4242 18.3655 9.98359 18.4756 9.5806 18.2713C9.56765 18.2002 9.58335 18.1268 9.62427 18.0672C9.66519 18.0076 9.72801 17.9666 9.79905 17.9531C10.2266 17.8631 10.6652 17.8378 11.1003 17.8778C11.1973 17.8834 11.2886 17.986 11.3969 18.0529Z"
                            fill="white"></path>
                        <path
                            d="M9.14652 17.3004C9.31125 17.2913 9.47641 17.2935 9.64084 17.307C9.68504 17.3147 9.72687 17.3325 9.76312 17.359C9.79936 17.3854 9.82904 17.4198 9.84987 17.4596C9.86588 17.5208 9.78678 17.6206 9.72841 17.6837C9.67921 17.7369 9.61224 17.7704 9.54009 17.7778C9.22373 17.7919 8.90548 17.8032 8.58912 17.79C8.52875 17.7868 8.47176 17.7612 8.42927 17.7182C8.38679 17.6752 8.36187 17.6179 8.35938 17.5575C8.36685 17.4927 8.39606 17.4324 8.44224 17.3864C8.48841 17.3404 8.54882 17.3114 8.6136 17.3042C8.79155 17.2891 8.96951 17.3004 9.14652 17.3004Z"
                            fill="white"></path>
                        <path
                            d="M7.1924 18.1767C7.24418 18.3114 7.23759 18.3989 7.13496 18.4535C7.0584 18.5087 6.97216 18.5489 6.88074 18.5722C6.55402 18.6051 6.22165 18.6371 5.90246 18.5242C5.8083 18.4893 5.72262 18.4441 5.72073 18.3358C5.71885 18.2276 5.80171 18.1758 5.90246 18.1475C6.32689 18.0381 6.77334 18.0482 7.1924 18.1767Z"
                            fill="white"></path>
                        <path
                            d="M10.3066 17.5512C10.3594 17.3017 10.4648 17.1802 10.6946 17.1652C10.977 17.1473 11.2595 17.1652 11.542 17.1652C11.5537 17.1653 11.5654 17.1669 11.5768 17.1699C11.7651 17.2141 11.8753 17.3243 11.8593 17.4382C11.8433 17.5522 11.7256 17.6162 11.525 17.6115C11.1738 17.6039 10.8217 17.603 10.4705 17.5955C10.4144 17.5868 10.3594 17.572 10.3066 17.5512Z"
                            fill="white"></path>
                        <path
                            d="M11.5726 16.6438C11.533 16.8105 11.4539 16.8868 11.2948 16.882C11.0472 16.8736 10.7996 16.882 10.5519 16.882C10.4859 16.886 10.42 16.8726 10.3608 16.843C10.3016 16.8134 10.2513 16.7687 10.2148 16.7135C10.2629 16.4734 10.4549 16.383 10.6498 16.3811C10.9719 16.3745 11.3504 16.2305 11.5726 16.6438Z"
                            fill="white"></path>
                        <path
                            d="M9.413 18.1055C9.36592 18.3409 9.17196 18.3531 9.02413 18.3691C8.76497 18.3872 8.50501 18.3906 8.24546 18.3795C8.1769 18.3805 8.10989 18.359 8.05464 18.3184C7.9994 18.2778 7.95895 18.2202 7.93945 18.1544C8.1127 17.872 8.43377 17.904 8.68705 17.8861C8.94033 17.8682 9.22939 17.8654 9.413 18.1055Z"
                            fill="white"></path>
                    </svg>
                    <p class="m-0 bjp-text">BHARATIYA JANATA PARTY</p>
                </div>
                <div class="header-wrapper">
                    <div class="dropdown-container">
                        <img src="" />
                        <p class="selected-language">en</p>
                    </div>
                    <div class="logout-icon">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-i4bv87-MuiSvgIcon-root"
                            focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutIcon">
                            <path
                                d="m17 7-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="margin-second d-flex  align-items-center pd-heading" >
                <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.57 5.92969L3.5 11.9997L9.57 18.0697" stroke="#3F3D51" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M20.4999 12H3.66992" stroke="#3F3D51" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <p class="m-0 fill-details-text">Update details</p>
                <div></div>
            </div>
            <div class="Toastify"></div>
            <div>
                <div class="">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item update-details-tab" role="presentation">
                            <button class="nav-link update-details-tab fw-semibold active position-relative "
                                id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item update-details-tab" role="presentation ">
                            <button class="nav-link update-details-tab fw-semibold position-relative " id="pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item update-details-tab" role="presentation">
                            <button class="nav-link update-details-tab fw-semibold position-relative" id="pills-contact-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <div class="tab-content  text-danger" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="pp-main-container">
                                <div class="pp-sub-contt">
                                    <div class="profile-pic-container">
                                        <div
                                            class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault css-mkijz0-MuiAvatar-root">
                                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiAvatar-fallback css-10mi8st-MuiSvgIcon-root-MuiAvatar-fallback"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="PersonIcon">
                                                <path
                                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button class="pp-upload-btn">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.345 12.2439L11.7967 3.79222L10.6183 2.61388L2.16667 11.0656V12.2439H3.345ZM4.03583 13.9106H0.5V10.3747L10.0292 0.845551C10.1854 0.689325 10.3974 0.601562 10.6183 0.601562C10.8393 0.601562 11.0512 0.689325 11.2075 0.845551L13.565 3.20305C13.7212 3.35932 13.809 3.57125 13.809 3.79222C13.809 4.01319 13.7212 4.22511 13.565 4.38138L4.03583 13.9106ZM0.5 15.5772H15.5V17.2439H0.5V15.5772Z"
                                                fill="#F15600"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="profile-photo-label">Upload Photo</div>
                            </div>
                            <div class="form-container">
                                <div class="divider-div"></div>
                                <div>
                                    <div class="input-container">
                                        <div
                                            class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary Mui-disabled MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="true" for=":r2:" id=":r2:-label">Mobile
                                                number</label>
                                            <div
                                                class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                <input aria-invalid="false" disabled="" id=":r2:"
                                                    name="mobile_number" type="text"
                                                    class="MuiInputBase-input MuiFilledInput-input Mui-disabled css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                    value="8238354292"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-div"></div>
                                <div class="double-field-wrapper">
                                    <div class="dfw-contt-one">
                                        <select class="select-input" name="salutation">
                                            <option value="" disabled="">Title</option>
                                            <option class="option-select-input" value="mrs">Mrs</option>
                                            <option class="option-select-input" value="mr">Mr</option>
                                            <option class="option-select-input" value="ms">Ms</option>
                                        </select>
                                    </div>
                                    <div class="separate"></div>
                                    <div class="dfw-contt-two">
                                        <div class="input-name">
                                            <div
                                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                                <label
                                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                    data-shrink="true" for=":r3:" id=":r3:-label">Name *</label>
                                                <div
                                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                    <input aria-invalid="false" id=":r3:" name="name"
                                                        type="text"
                                                        class="MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                        value="bhavik"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gender-container">
                                    <div class="dob-field">
                                        <div class="dob-field-one">
                                            <div style="font-size: 16px; color: rgb(113, 111, 134);">D.O.B *</div>
                                            <div
                                                style="display: flex; flex-direction: row; align-items: center; background-color: white; border-radius: 8px; justify-content: end; width: 100%;">
                                                <div
                                                    class="MuiFormControl-root MuiTextField-root css-r0ibox-MuiFormControl-root-MuiTextField-root">
                                                    <div
                                                        class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-adornedEnd Mui-readOnly MuiInputBase-readOnly css-o9k5xi-MuiInputBase-root-MuiOutlinedInput-root">
                                                        <input aria-invalid="false" autocomplete="off" id=":r5:"
                                                            placeholder="DD-MM-YYYY" readonly="" type="text"
                                                            aria-label="Choose date, selected date is Aug 7, 1997"
                                                            inputmode="text"
                                                            class=" MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd Mui-readOnly MuiInputBase-readOnly css-nxo287-MuiInputBase-input-MuiOutlinedInput-input"
                                                            value="07-08-1997 ">
                                                        <fieldset aria-hidden="true"
                                                            class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                                            <legend class="css-ihdtdm"><span
                                                                    class="notranslate">&ZeroWidthSpace;</span>
                                                            </legend>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; z-index: 0; margin-right: 10px;">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 2V5" stroke="#F15600" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M16 2V5" stroke="#F15600" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                                            stroke="#F15600" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M20.75 17.5996H3.25" stroke="#F15600"
                                                            stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M12 8.25C10.77 8.25 9.73 8.92 9.73 10.22C9.73 10.84 10.02 11.31 10.46 11.61C9.85 11.97 9.5 12.55 9.5 13.23C9.5 14.47 10.45 15.24 12 15.24C13.54 15.24 14.5 14.47 14.5 13.23C14.5 12.55 14.15 11.96 13.53 11.61C13.98 11.3 14.26 10.84 14.26 10.22C14.26 8.92 13.23 8.25 12 8.25ZM12 11.09C11.48 11.09 11.1 10.78 11.1 10.29C11.1 9.79 11.48 9.5 12 9.5C12.52 9.5 12.9 9.79 12.9 10.29C12.9 10.78 12.52 11.09 12 11.09ZM12 14C11.34 14 10.86 13.67 10.86 13.07C10.86 12.47 11.34 12.15 12 12.15C12.66 12.15 13.14 12.48 13.14 13.07C13.14 13.67 12.66 14 12 14Z"
                                                            fill="#F15600"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dob-field-two">
                                            <div style="font-size: 16px; color: transparent;">Age</div>
                                            <div
                                                class="MuiFormControl-root MuiTextField-root age-input css-1rd8emk-MuiFormControl-root-MuiTextField-root">
                                                <div
                                                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl Mui-readOnly MuiInputBase-readOnly css-9ddj71-MuiInputBase-root-MuiOutlinedInput-root">
                                                    <input aria-invalid="false" id=":r7:" name="age"
                                                        placeholder="Age" readonly="" type="text"
                                                        class="MuiInputBase-input MuiOutlinedInput-input Mui-readOnly MuiInputBase-readOnly css-1t8l2tu-MuiInputBase-input-MuiOutlinedInput-input"
                                                        value="27 Yrs">
                                                    <fieldset aria-hidden="true"
                                                        class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                                        <legend class="css-ihdtdm"><span
                                                                class="notranslate">&ZeroWidthSpace;</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gender-label" style="margin-top: 10px;">Gender *</div>
                                    <div class="chip-container">
                                        <div class="chip ">Female</div>
                                        <div class="chip selected">Male</div>
                                        <div class="chip ">Other</div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="input-container">
                                            <div
                                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                                <label
                                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                    data-shrink="true" for=":r8:" id=":r8:-label">Email
                                                    Id</label>
                                                <div
                                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                    <input aria-invalid="false" id=":r8:" name="email"
                                                        type="text"
                                                        class="MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                        value="bhavik@gmail.com"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-extra-form-container">
                                    <div class="primary-dropdown-container">
                                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="false"
                                                id="demo-simple-select-standard-label">Religion</label>
                                            <div
                                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                                <div tabindex="0" role="combobox" aria-controls=":r9:"
                                                    aria-expanded="false" aria-haspopup="listbox"
                                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                    id="demo-simple-select-standard"
                                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                    <span class="notranslate">&ZeroWidthSpace;</span></div>
                                                <input aria-invalid="false" name="religion_id" aria-hidden="true"
                                                    tabindex="-1"
                                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                    value="">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="ArrowDropDownIcon">
                                                    <path d="M7 10l5 5 5-5z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="primary-dropdown-container">
                                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="false"
                                                id="demo-simple-select-standard-label">Category</label>
                                            <div
                                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                                <div tabindex="0" role="combobox" aria-controls=":ra:"
                                                    aria-expanded="false" aria-haspopup="listbox"
                                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                    id="demo-simple-select-standard"
                                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                    <span class="notranslate">&ZeroWidthSpace;</span></div>
                                                <input aria-invalid="false" name="category_id" aria-hidden="true"
                                                    tabindex="-1"
                                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                    value="">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="ArrowDropDownIcon">
                                                    <path d="M7 10l5 5 5-5z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                        {{-- <label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="false" for=":rb:" id=":rb:-label">Caste</label> --}}
                                        <div
                                            class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                            <input aria-invalid="false" placeholder="Caste" id=":rb:" name="caste" type="text"
                                                class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                value=""></div>
                                    </div>
                                    <div class="primary-dropdown-container">
                                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="false"
                                                id="demo-simple-select-standard-label">Education</label>
                                            <div
                                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                                <div tabindex="0" role="combobox" aria-controls=":rc:"
                                                    aria-expanded="false" aria-haspopup="listbox"
                                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                    id="demo-simple-select-standard"
                                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                    <span class="notranslate">&ZeroWidthSpace;</span></div>
                                                <input aria-invalid="false" name="qualification_id"
                                                    aria-hidden="true" tabindex="-1"
                                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                    value="">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="ArrowDropDownIcon">
                                                    <path d="M7 10l5 5 5-5z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="primary-dropdown-container">
                                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="false"
                                                id="demo-simple-select-standard-label">Profession</label>
                                            <div
                                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                                <div tabindex="0" role="combobox" aria-controls=":rd:"
                                                    aria-expanded="false" aria-haspopup="listbox"
                                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                    id="demo-simple-select-standard"
                                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                    <span class="notranslate">&ZeroWidthSpace;</span></div>
                                                <input aria-invalid="false" name="profession_id" aria-hidden="true"
                                                    tabindex="-1"
                                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                    value="">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="ArrowDropDownIcon">
                                                    <path d="M7 10l5 5 5-5z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                        {{-- <label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="false" for=":re:" id=":re:-label">Whatsapp/ Alternative
                                            number</label> --}}
                                        <div
                                            class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                            <input aria-invalid="false" id=":re:" placeholder="Whatsapp/ Alternative number" name="whatsapp_number"
                                                type="tel" maxlength="10"
                                                class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                value=""></div>
                                    </div>
                                    <div class="user-extra-details-divider"></div>
                                    <div class="relationship-label">Father / Spouse name</div>
                                    <div
                                        class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                        {{-- <label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="false" for=":rf:" id=":rf:-label">Father / Spouse
                                            name</label> --}}
                                        <div
                                            class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                            <input aria-invalid="false" id=":rf:" placeholder="Father / Spouse name" name="relationship_name"
                                                type="text"
                                                class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                value=""></div>
                                    </div>
                                </div>
                                <div class="divider-div"></div>
                                <div class="add-address-label">Referral (only a Primary Member can refer)</div>
                                <div>
                                    <div>
                                        <div class="input-container">
                                            <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root"
                                                inputmode="text">
                                                <label
                                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary Mui-disabled MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                    data-shrink="true" for=":rg:" id=":rg:-label">Mobile number /
                                                    Referral code</label>
                                                <div
                                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                    <input aria-invalid="false" disabled="" id=":rg:"
                                                        name="referral_code" type="text" maxlength="10"
                                                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                        value="POWCGJ"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 1rem;">
                                        <div>
                                            <div class="input-container">
                                                <div
                                                    class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                                    <label
                                                        class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary Mui-disabled MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                        data-shrink="true" for=":rh:" id=":rh:-label">Referred by
                                                        (name)</label>
                                                    <div
                                                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                        <input aria-invalid="false" disabled="" id=":rh:"
                                                            name="referred_name" type="text"
                                                            class="MuiInputBase-input MuiFilledInput-input Mui-disabled css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                            value="bhavik"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                            <div class="bg-white main-container">

                                <div class="Toastify"></div>
                                <div class="update-details-container">

                                    <div class="family-tab-container">
                                        <div class="family-form-container">
                                            <div
                                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                                <label
                                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                    data-shrink="true" for=":r8v:" id=":r8v:-label">Full Name
                                                    *</label>
                                                <div
                                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                    <input aria-invalid="false" id=":r8v:" name="name"
                                                        type="text"
                                                        class="MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                        value=""></div>
                                            </div>
                                            <div class="abc">
                                                <div class="primary-dropdown-container">
                                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                                        <label
                                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                                            data-shrink="false"
                                                            id="demo-simple-select-standard-label">Relationship</label>
                                                        <div
                                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                                            <div tabindex="0" role="combobox" aria-controls=":r90:"
                                                                aria-expanded="false" aria-haspopup="listbox"
                                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                                id="demo-simple-select-standard"
                                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                                <span class="notranslate">&ZeroWidthSpace;</span></div>
                                                            <input aria-invalid="false" name="relationship"
                                                                aria-hidden="true" tabindex="-1"
                                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                                value="">
                                                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                                focusable="false" aria-hidden="true"
                                                                viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                                                <path d="M7 10l5 5 5-5z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="border: 1px solid rgb(195, 201, 213); border-radius: 10px; padding: 10px;">
                                                <div class="dob-field">
                                                    <div class="dob-field-one">
                                                        <div style="font-size: 0.7rem; color: rgb(113, 111, 134);">
                                                            D.O.B </div>
                                                        <div
                                                            style="display: flex; flex-direction: row; align-items: center; background-color: white; border-radius: 8px; justify-content: end; width: 100%;">
                                                            <div
                                                                class="MuiFormControl-root MuiTextField-root css-r0ibox-MuiFormControl-root-MuiTextField-root">
                                                                <div
                                                                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-adornedEnd Mui-readOnly MuiInputBase-readOnly css-o9k5xi-MuiInputBase-root-MuiOutlinedInput-root">
                                                                    <input aria-invalid="false" autocomplete="off"
                                                                        id=":r92:" placeholder="DD-MM-YYYY"
                                                                        readonly="" type="text"
                                                                        aria-label="Choose date" inputmode="text"
                                                                        class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd Mui-readOnly MuiInputBase-readOnly css-nxo287-MuiInputBase-input-MuiOutlinedInput-input"
                                                                        value="">
                                                                    <fieldset aria-hidden="true"
                                                                        class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                                                        <legend class="css-ihdtdm"><span
                                                                                class="notranslate">&ZeroWidthSpace;</span>
                                                                        </legend>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; z-index: 0; margin-right: 10px;">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8 2V5" stroke="#F15600"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M16 2V5" stroke="#F15600"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                                                        stroke="#F15600" stroke-width="1.5"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M20.75 17.5996H3.25" stroke="#F15600"
                                                                        stroke-width="1.5" stroke-miterlimit="10"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M12 8.25C10.77 8.25 9.73 8.92 9.73 10.22C9.73 10.84 10.02 11.31 10.46 11.61C9.85 11.97 9.5 12.55 9.5 13.23C9.5 14.47 10.45 15.24 12 15.24C13.54 15.24 14.5 14.47 14.5 13.23C14.5 12.55 14.15 11.96 13.53 11.61C13.98 11.3 14.26 10.84 14.26 10.22C14.26 8.92 13.23 8.25 12 8.25ZM12 11.09C11.48 11.09 11.1 10.78 11.1 10.29C11.1 9.79 11.48 9.5 12 9.5C12.52 9.5 12.9 9.79 12.9 10.29C12.9 10.78 12.52 11.09 12 11.09ZM12 14C11.34 14 10.86 13.67 10.86 13.07C10.86 12.47 11.34 12.15 12 12.15C12.66 12.15 13.14 12.48 13.14 13.07C13.14 13.67 12.66 14 12 14Z"
                                                                        fill="#F15600"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dob-field-two">
                                                        <div style="font-size: 0.7rem; color: transparent;">Age</div>
                                                        <div
                                                            class="MuiFormControl-root MuiTextField-root age-input css-1rd8emk-MuiFormControl-root-MuiTextField-root">
                                                            <div
                                                                class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl Mui-readOnly MuiInputBase-readOnly css-9ddj71-MuiInputBase-root-MuiOutlinedInput-root">
                                                                <input aria-invalid="false" id=":r94:"
                                                                    name="age" placeholder="Age" readonly=""
                                                                    type="text"
                                                                    class="MuiInputBase-input MuiOutlinedInput-input Mui-readOnly MuiInputBase-readOnly css-1t8l2tu-MuiInputBase-input-MuiOutlinedInput-input"
                                                                    value="">
                                                                <fieldset aria-hidden="true"
                                                                    class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                                                    <legend class="css-ihdtdm"><span
                                                                            class="notranslate">&ZeroWidthSpace;</span>
                                                                    </legend>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                                <label
                                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                    data-shrink="true" for=":r95:" id=":r95:-label">Mobile
                                                    number</label>
                                                <div
                                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                    <input aria-invalid="false" id=":r95:" name="phone_number"
                                                        type="tel" maxlength="10"
                                                        class="MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                        value=""></div>
                                            </div>
                                            <div style="display: flex; flex-direction: row; gap: 10px;">
                                                <div class="family-form-add-btn">Add</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                   
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <div class="contact-tab-container">
                            <div class="address-form-container">
                                <div class="add-address-label">Address</div>
                                <div>
                                    <div class="input-container">
                                        <div
                                            class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="true" for=":r96:" id=":r96:-label">Address (House /
                                                Flat / Floor No.)</label>
                                            <div
                                                class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                <input aria-invalid="false" id=":r96:" name="address"
                                                    type="text" maxlength="100"
                                                    class="MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                    value="rajkot"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-container">
                                        <div
                                            class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                            <label
                                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                                data-shrink="true" for=":r97:" id=":r97:-label">Pincode</label>
                                            <div
                                                class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                                <input aria-invalid="false" id=":r97:" name="pin_code"
                                                    type="tel" maxlength="6"
                                                    class="MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                                    value="453535"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="primary-dropdown-container">
                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root"><label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-standard css-1c2i806-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="true" id="demo-simple-select-standard-label">State *</label>
                                        <div
                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                            <div tabindex="0" role="combobox" aria-controls=":r98:"
                                                aria-expanded="false" aria-haspopup="listbox"
                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                id="demo-simple-select-standard"
                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                Gujarat</div><input aria-invalid="false" name="state_id"
                                                aria-hidden="true" tabindex="-1"
                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                value="7"><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="ArrowDropDownIcon">
                                                <path d="M7 10l5 5 5-5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="primary-dropdown-container">
                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root"><label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-standard css-1c2i806-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="true" id="demo-simple-select-standard-label">District
                                            *</label>
                                        <div
                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                            <div tabindex="0" role="combobox" aria-controls=":r99:"
                                                aria-expanded="false" aria-haspopup="listbox"
                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                id="demo-simple-select-standard"
                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                Rajkot</div><input aria-invalid="false" name="district_id"
                                                aria-hidden="true" tabindex="-1"
                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                value="180"><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="ArrowDropDownIcon">
                                                <path d="M7 10l5 5 5-5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="primary-dropdown-container">
                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root"><label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-standard css-1c2i806-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="true" id="demo-simple-select-standard-label">Assembly
                                            constituency (AC) *</label>
                                        <div
                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                            <div tabindex="0" role="combobox" aria-controls=":r9a:"
                                                aria-expanded="false" aria-haspopup="listbox"
                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                id="demo-simple-select-standard"
                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                Chotila - 63</div><input aria-invalid="false"
                                                name="assembly_constituency_id" aria-hidden="true" tabindex="-1"
                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                value="794"><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="ArrowDropDownIcon">
                                                <path d="M7 10l5 5 5-5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-divier"></div>
                            <div class="extra-contact-form-container">
                                <div class="add-address-label">If you are a BJP karyakarta? Please fill these
                                    information</div>
                                <div
                                    class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                    {{-- <label
                                        class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                        data-shrink="false" for=":r9b:" id=":r9b:-label">STD| Landline
                                        number</label> --}}
                                    <div
                                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                        <input aria-invalid="false" id=":r9b:" placeholder="STD| Landline number" name="landline_number"
                                            type="text"
                                            class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                            value=""></div>
                                </div>
                                <div class="primary-dropdown-container">
                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root"><label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="false" id="demo-simple-select-standard-label">Zila</label>
                                        <div
                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                            <div tabindex="0" role="combobox" aria-controls=":r9c:"
                                                aria-expanded="false" aria-haspopup="listbox"
                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                id="demo-simple-select-standard"
                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                <span class="notranslate">&ZeroWidthSpace;</span></div><input
                                                aria-invalid="false" name="zila_id" aria-hidden="true"
                                                tabindex="-1"
                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                value=""><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="ArrowDropDownIcon">
                                                <path d="M7 10l5 5 5-5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="primary-dropdown-container">
                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root"><label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="false" id="demo-simple-select-standard-label">Mandal</label>
                                        <div
                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                            <div tabindex="0" role="combobox" aria-controls=":r9d:"
                                                aria-expanded="false" aria-haspopup="listbox"
                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                id="demo-simple-select-standard"
                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                <span class="notranslate">&ZeroWidthSpace;</span></div><input
                                                aria-invalid="false" name="mandal_id" aria-hidden="true"
                                                tabindex="-1"
                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                value=""><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="ArrowDropDownIcon">
                                                <path d="M7 10l5 5 5-5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                    {{-- <label
                                        class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                        data-shrink="false" for=":r9e:" id=":r9e:-label">Ward name</label> --}}
                                    <div
                                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                        <input aria-invalid="false" id=":r9e:" placeholder="Ward name" name="ward_name" type="text"
                                            class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                            value=""></div>
                                </div>
                                <div class="primary-dropdown-container">
                                    <div class="MuiFormControl-root css-1869usk-MuiFormControl-root"><label
                                            class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                            data-shrink="false" id="demo-simple-select-standard-label">Booth</label>
                                        <div
                                            class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                            <div tabindex="0" role="combobox" aria-controls=":r9f:"
                                                aria-expanded="false" aria-haspopup="listbox"
                                                aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                                id="demo-simple-select-standard"
                                                class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                                <span class="notranslate">&ZeroWidthSpace;</span></div><input
                                                aria-invalid="false" name="booth_id" aria-hidden="true"
                                                tabindex="-1"
                                                class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput"
                                                value=""><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="ArrowDropDownIcon">
                                                <path d="M7 10l5 5 5-5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="update-details-container">
           

        </div>
        <div class="update-next-btn-container">
            <div class="form-update-btn form-update-dark-btn " style="width: 50%;">Update &amp; Next</div>
        </div>
    </div>
    </div>

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
