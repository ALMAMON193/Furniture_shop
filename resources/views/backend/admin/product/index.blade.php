@extends('backend.admin.app')
@section('title','Admin | Product Create')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Product Title</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction"
                                               value="add">
                                        <input type="text" class="form-control d-none" id="product-id-input">
                                        <input type="text" class="form-control" id="product-title-input" value=""
                                               placeholder="Enter product title" required="">
                                        <div class="invalid-feedback">Please Enter a product title.</div>
                                    </div>
                                    <div>
                                        <label>Product Description</label>

                                        <div id="ckeditor-classic" style="display: none;">
                                            <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material
                                                composition is 100% organic cotton. This is one of the world’s leading
                                                designer lifestyle brands and is internationally recognized for
                                                celebrating the essence of classic American cool style, featuring preppy
                                                with a twist designs.</p>
                                            <ul>
                                                <li>Full Sleeve</li>
                                                <li>Cotton</li>
                                                <li>All Sizes available</li>
                                                <li>4 Different Color</li>
                                            </ul>
                                        </div>
                                        <div class="ck ck-reset ck-editor ck-rounded-corners" role="application"
                                             dir="ltr" lang="en"
                                             aria-labelledby="ck-editor__label_ede5ad2b0f8d959a2cfda1375a2680286"><label
                                                class="ck ck-label ck-voice-label"
                                                id="ck-editor__label_ede5ad2b0f8d959a2cfda1375a2680286">Rich Text
                                                Editor</label>
                                            <div class="ck ck-editor__top ck-reset_all" role="presentation">
                                                <div class="ck ck-sticky-panel">
                                                    <div class="ck ck-sticky-panel__placeholder"
                                                         style="display: none;"></div>
                                                    <div class="ck ck-sticky-panel__content">
                                                        <div class="ck ck-toolbar ck-toolbar_grouping" role="toolbar"
                                                             aria-label="Editor toolbar" tabindex="-1">
                                                            <div class="ck ck-toolbar__items">
                                                                <button class="ck ck-button ck-disabled ck-off"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e13cc1a073ae4d5f80ca2ebf9c1eb95e1"
                                                                        aria-disabled="true"
                                                                        data-cke-tooltip-text="Undo (Ctrl+Z)"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="m5.042 9.367 2.189 1.837a.75.75 0 0 1-.965 1.149l-3.788-3.18a.747.747 0 0 1-.21-.284.75.75 0 0 1 .17-.945L6.23 4.762a.75.75 0 1 1 .964 1.15L4.863 7.866h8.917A.75.75 0 0 1 14 7.9a4 4 0 1 1-1.477 7.718l.344-1.489a2.5 2.5 0 1 0 1.094-4.73l.008-.032H5.042z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_e13cc1a073ae4d5f80ca2ebf9c1eb95e1">Undo</span>
                                                                </button>
                                                                <button class="ck ck-button ck-disabled ck-off"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e64630cd4a3c202c29b59d0db0fd46b1e"
                                                                        aria-disabled="true"
                                                                        data-cke-tooltip-text="Redo (Ctrl+Y)"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="m14.958 9.367-2.189 1.837a.75.75 0 0 0 .965 1.149l3.788-3.18a.747.747 0 0 0 .21-.284.75.75 0 0 0-.17-.945L13.77 4.762a.75.75 0 1 0-.964 1.15l2.331 1.955H6.22A.75.75 0 0 0 6 7.9a4 4 0 1 0 1.477 7.718l-.344-1.489A2.5 2.5 0 1 1 6.039 9.4l-.008-.032h8.927z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_e64630cd4a3c202c29b59d0db0fd46b1e">Redo</span>
                                                                </button>
                                                                <span class="ck ck-toolbar__separator"></span>
                                                                <div class="ck ck-dropdown ck-heading-dropdown">
                                                                    <button
                                                                        class="ck ck-button ck-off ck-button_with-text ck-dropdown__button"
                                                                        type="button" tabindex="-1" aria-label="Heading"
                                                                        data-cke-tooltip-text="Heading"
                                                                        data-cke-tooltip-position="s"
                                                                        aria-haspopup="true" aria-expanded="false"><span
                                                                            class="ck ck-button__label">Choose heading</span>
                                                                        <svg
                                                                            class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-dropdown__arrow"
                                                                            viewBox="0 0 10 10">
                                                                            <path
                                                                                d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <div
                                                                        class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"
                                                                        tabindex="-1"></div>
                                                                </div>
                                                                <span class="ck ck-toolbar__separator"></span>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_ebe0f88d4df013b125c0b886800908c7a"
                                                                        aria-pressed="false"
                                                                        data-cke-tooltip-text="Bold (Ctrl+B)"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M10.187 17H5.773c-.637 0-1.092-.138-1.364-.415-.273-.277-.409-.718-.409-1.323V4.738c0-.617.14-1.062.419-1.332.279-.27.73-.406 1.354-.406h4.68c.69 0 1.288.041 1.793.124.506.083.96.242 1.36.478.341.197.644.447.906.75a3.262 3.262 0 0 1 .808 2.162c0 1.401-.722 2.426-2.167 3.075C15.05 10.175 16 11.315 16 13.01a3.756 3.756 0 0 1-2.296 3.504 6.1 6.1 0 0 1-1.517.377c-.571.073-1.238.11-2 .11zm-.217-6.217H7v4.087h3.069c1.977 0 2.965-.69 2.965-2.072 0-.707-.256-1.22-.768-1.537-.512-.319-1.277-.478-2.296-.478zM7 5.13v3.619h2.606c.729 0 1.292-.067 1.69-.2a1.6 1.6 0 0 0 .91-.765c.165-.267.247-.566.247-.897 0-.707-.26-1.176-.778-1.409-.519-.232-1.31-.348-2.375-.348H7z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_ebe0f88d4df013b125c0b886800908c7a">Bold</span>
                                                                </button>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e839fffaf0aa511f1beffea81b77c242b"
                                                                        aria-pressed="false"
                                                                        data-cke-tooltip-text="Italic (Ctrl+I)"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="m9.586 14.633.021.004c-.036.335.095.655.393.962.082.083.173.15.274.201h1.474a.6.6 0 1 1 0 1.2H5.304a.6.6 0 0 1 0-1.2h1.15c.474-.07.809-.182 1.005-.334.157-.122.291-.32.404-.597l2.416-9.55a1.053 1.053 0 0 0-.281-.823 1.12 1.12 0 0 0-.442-.296H8.15a.6.6 0 0 1 0-1.2h6.443a.6.6 0 1 1 0 1.2h-1.195c-.376.056-.65.155-.823.296-.215.175-.423.439-.623.79l-2.366 9.347z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_e839fffaf0aa511f1beffea81b77c242b">Italic</span>
                                                                </button>
                                                                <span class="ck ck-toolbar__separator"></span>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_ef508cda929d54f8ecee8c1403824dbd2"
                                                                        aria-pressed="false"
                                                                        data-cke-tooltip-text="Link (Ctrl+K)"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="m11.077 15 .991-1.416a.75.75 0 1 1 1.229.86l-1.148 1.64a.748.748 0 0 1-.217.206 5.251 5.251 0 0 1-8.503-5.955.741.741 0 0 1 .12-.274l1.147-1.639a.75.75 0 1 1 1.228.86L4.933 10.7l.006.003a3.75 3.75 0 0 0 6.132 4.294l.006.004zm5.494-5.335a.748.748 0 0 1-.12.274l-1.147 1.639a.75.75 0 1 1-1.228-.86l.86-1.23a3.75 3.75 0 0 0-6.144-4.301l-.86 1.229a.75.75 0 0 1-1.229-.86l1.148-1.64a.748.748 0 0 1 .217-.206 5.251 5.251 0 0 1 8.503 5.955zm-4.563-2.532a.75.75 0 0 1 .184 1.045l-3.155 4.505a.75.75 0 1 1-1.229-.86l3.155-4.506a.75.75 0 0 1 1.045-.184z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_ef508cda929d54f8ecee8c1403824dbd2">Link</span>
                                                                </button>
                                                                <button
                                                                    class="ck ck-button ck-off ck-file-dialog-button"
                                                                    type="button" tabindex="-1"
                                                                    aria-labelledby="ck-editor__aria-label_ea47eb425114f00ffedbb4c2c75139d69"
                                                                    data-cke-tooltip-text="Upload image from computer"
                                                                    data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M1.2 1C.536 1 0 1.47 0 2.1v12.863C0 15.603.547 16 1.199 16h6.3c.908-1.19 1.892-2.41 2.8-3.6L6.615 9.15a.694.694 0 0 0-.957-.033L1.5 13.5v-11h15v6c.6.6 1.012.857 1.5 1.5V2.1c0-.63-.55-1.1-1.201-1.1h-15.6Zm11.724 2.805a2.133 2.133 0 0 0-.998.283 2.129 2.129 0 0 0-.992 1.295c-.074.27-.095.55-.057.828a2.136 2.136 0 0 0 1.56 1.783 2.13 2.13 0 0 0 2.612-1.506 2.129 2.129 0 0 0-2.125-2.683Z"></path>
                                                                        <path
                                                                            d="M15.208 19.011c.436 0 .79-.327.79-.763v-5.4l2.059 2.455a.79.79 0 0 0 1.212-1.015l-3.352-3.995a.79.79 0 0 0-.996-.179.786.786 0 0 0-.299.221l-3.35 3.99a.79.79 0 1 0 1.21 1.017L14.5 12.9v5.3c0 .437.272.811.709.811Z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_ea47eb425114f00ffedbb4c2c75139d69">Upload image from computer</span><input
                                                                        class="ck-hidden" type="file" tabindex="-1"
                                                                        accept="image/jpeg,image/png,image/gif,image/bmp,image/webp,image/tiff"
                                                                        multiple="true"></button>
                                                                <div class="ck ck-dropdown">
                                                                    <button
                                                                        class="ck ck-button ck-off ck-dropdown__button"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_eff8308e74b7f8722291a7bd1b1c85aab"
                                                                        data-cke-tooltip-text="Insert table"
                                                                        data-cke-tooltip-position="s"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <svg
                                                                            class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M3 6v3h4V6H3zm0 4v3h4v-3H3zm0 4v3h4v-3H3zm5 3h4v-3H8v3zm5 0h4v-3h-4v3zm4-4v-3h-4v3h4zm0-4V6h-4v3h4zm1.5 8a1.5 1.5 0 0 1-1.5 1.5H3A1.5 1.5 0 0 1 1.5 17V4c.222-.863 1.068-1.5 2-1.5h13c.932 0 1.778.637 2 1.5v13zM12 13v-3H8v3h4zm0-4V6H8v3h4z"></path>
                                                                        </svg>
                                                                        <span class="ck ck-button__label"
                                                                              id="ck-editor__aria-label_eff8308e74b7f8722291a7bd1b1c85aab">Insert table</span>
                                                                        <svg
                                                                            class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-dropdown__arrow"
                                                                            viewBox="0 0 10 10">
                                                                            <path
                                                                                d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <div
                                                                        class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"
                                                                        tabindex="-1"></div>
                                                                </div>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_eebffbc4f7e84af4f7240693904b8e974"
                                                                        aria-pressed="false"
                                                                        data-cke-tooltip-text="Block quote"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M3 10.423a6.5 6.5 0 0 1 6.056-6.408l.038.67C6.448 5.423 5.354 7.663 5.22 10H9c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574zm8 0a6.5 6.5 0 0 1 6.056-6.408l.038.67c-2.646.739-3.74 2.979-3.873 5.315H17c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_eebffbc4f7e84af4f7240693904b8e974">Block quote</span>
                                                                </button>
                                                                <div class="ck ck-dropdown">
                                                                    <button
                                                                        class="ck ck-button ck-off ck-dropdown__button"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_ea7b69b3bc2998b2f5da9d1ba22653d04"
                                                                        data-cke-tooltip-text="Insert media"
                                                                        data-cke-tooltip-position="s"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <svg
                                                                            class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M18.68 3.03c.6 0 .59-.03.59.55v12.84c0 .59.01.56-.59.56H1.29c-.6 0-.59.03-.59-.56V3.58c0-.58-.01-.55.6-.55h17.38zM15.77 15V5H4.2v10h11.57zM2 4v1h1V4H2zm0 2v1h1V6H2zm0 2v1h1V8H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zM17 4v1h1V4h-1zm0 2v1h1V6h-1zm0 2v1h1V8h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zM7.5 7.177a.4.4 0 0 1 .593-.351l5.133 2.824a.4.4 0 0 1 0 .7l-5.133 2.824a.4.4 0 0 1-.593-.35V7.176v.001z"></path>
                                                                        </svg>
                                                                        <span class="ck ck-button__label"
                                                                              id="ck-editor__aria-label_ea7b69b3bc2998b2f5da9d1ba22653d04">Insert media</span>
                                                                        <svg
                                                                            class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-dropdown__arrow"
                                                                            viewBox="0 0 10 10">
                                                                            <path
                                                                                d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <div
                                                                        class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se"
                                                                        tabindex="-1"></div>
                                                                </div>
                                                                <span class="ck ck-toolbar__separator"></span>
                                                                <button class="ck ck-button ck-on" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e7e8554fd8405c90b9db13d380683ceb0"
                                                                        aria-pressed="true"
                                                                        data-cke-tooltip-text="Bulleted List"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0C1 4.784 1.777 4 2.75 4c.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75C1.784 7.5 1 6.723 1 5.75zm6 9c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0c0-.966.777-1.75 1.75-1.75.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75-.966 0-1.75-.777-1.75-1.75z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_e7e8554fd8405c90b9db13d380683ceb0">Bulleted List</span>
                                                                </button>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_effdd7e6b29dd409f0322fff530e1f4f2"
                                                                        aria-pressed="false"
                                                                        data-cke-tooltip-text="Numbered List"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM3.5 3v5H2V3.7H1v-1h2.5V3zM.343 17.857l2.59-3.257H2.92a.6.6 0 1 0-1.04 0H.302a2 2 0 1 1 3.995 0h-.001c-.048.405-.16.734-.333.988-.175.254-.59.692-1.244 1.312H4.3v1h-4l.043-.043zM7 14.75a.75.75 0 0 1 .75-.75h9.5a.75.75 0 1 1 0 1.5h-9.5a.75.75 0 0 1-.75-.75z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_effdd7e6b29dd409f0322fff530e1f4f2">Numbered List</span>
                                                                </button>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e2c219991c89a06f7298044720ea73e02"
                                                                        data-cke-tooltip-text="Decrease indent"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M2 3.75c0 .414.336.75.75.75h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 0 0-.75.75zm5 6c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM2.75 16.5h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 1 0 0 1.5zm1.618-9.55L.98 9.358a.4.4 0 0 0 .013.661l3.39 2.207A.4.4 0 0 0 5 11.892V7.275a.4.4 0 0 0-.632-.326z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_e2c219991c89a06f7298044720ea73e02">Decrease indent</span>
                                                                </button>
                                                                <button class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_eac6ae9aa094b650137cb5930cba186d4"
                                                                        data-cke-tooltip-text="Increase indent"
                                                                        data-cke-tooltip-position="s">
                                                                    <svg
                                                                        class="ck ck-icon ck-reset_all-excluded ck-icon_inherit-color ck-button__icon"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M2 3.75c0 .414.336.75.75.75h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 0 0-.75.75zm5 6c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM2.75 16.5h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 1 0 0 1.5zM1.632 6.95 5.02 9.358a.4.4 0 0 1-.013.661l-3.39 2.207A.4.4 0 0 1 1 11.892V7.275a.4.4 0 0 1 .632-.326z"></path>
                                                                    </svg>
                                                                    <span class="ck ck-button__label"
                                                                          id="ck-editor__aria-label_eac6ae9aa094b650137cb5930cba186d4">Increase indent</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ck ck-editor__main" role="presentation">
                                                <div
                                                    class="ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred"
                                                    lang="en" dir="ltr" role="textbox"
                                                    aria-label="Editor editing area: main" contenteditable="true"><p>
                                                        Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton.
                                                        Material composition is 100% organic cotton. This is one of the
                                                        world’s leading designer lifestyle brands and is internationally
                                                        recognized for celebrating the essence of classic American cool
                                                        style, featuring preppy with a twist designs.</p>
                                                    <ul>
                                                        <li>Full Sleeve</li>
                                                        <li>Cotton</li>
                                                        <li>All Sizes available</li>
                                                        <li>4 Different Color</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Gallery</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h5 class="fs-14 mb-1">Product Image</h5>
                                        <p class="text-muted">Add Product main Image.</p>
                                        <div class="text-center">
                                            <div class="position-relative d-inline-block">
                                                <div class="position-absolute top-100 start-100 translate-middle">
                                                    <label for="product-image-input" class="mb-0"
                                                           data-bs-toggle="tooltip" data-bs-placement="right"
                                                           aria-label="Select Image"
                                                           data-bs-original-title="Select Image">
                                                        <div class="avatar-xs">
                                                            <div
                                                                class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                <i class="ri-image-fill"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <input class="form-control d-none" value="" id="product-image-input"
                                                           type="file" accept="image/png, image/gif, image/jpeg">
                                                </div>
                                                <div class="avatar-lg">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="#" id="product-img" class="avatar-md h-auto">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 mb-1">Product Gallery</h5>
                                        <p class="text-muted">Add Product Gallery Images.</p>

                                        <div class="dropzone dz-clickable">

                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                </div>

                                                <h5>Drop files here or click to upload.</h5>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-0" id="dropzone-preview">

                                        </ul>
                                        <!-- end dropzon-preview -->
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab"
                                               href="#addproduct-general-info" role="tab" aria-selected="true">
                                                General Info
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata"
                                               role="tab" aria-selected="false" tabindex="-1">
                                                Meta Data
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end card header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Manufacturer
                                                            Name</label>
                                                        <input type="text" class="form-control"
                                                               id="manufacturer-name-input"
                                                               placeholder="Enter manufacturer name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Manufacturer
                                                            Brand</label>
                                                        <input type="text" class="form-control"
                                                               id="manufacturer-brand-input"
                                                               placeholder="Enter manufacturer brand">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="stocks-input">Stocks</label>
                                                        <input type="text" class="form-control" id="stocks-input"
                                                               placeholder="Stocks" required="">
                                                        <div class="invalid-feedback">Please Enter a product stocks.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                               for="product-price-input">Price</label>
                                                        <div class="input-group has-validation mb-3">
                                                            <span class="input-group-text"
                                                                  id="product-price-addon">$</span>
                                                            <input type="text" class="form-control"
                                                                   id="product-price-input" placeholder="Enter price"
                                                                   aria-label="Price"
                                                                   aria-describedby="product-price-addon" required="">
                                                            <div class="invalid-feedback">Please Enter a product
                                                                price.
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                               for="product-discount-input">Discount</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"
                                                                  id="product-discount-addon">%</span>
                                                            <input type="text" class="form-control"
                                                                   id="product-discount-input"
                                                                   placeholder="Enter discount" aria-label="discount"
                                                                   aria-describedby="product-discount-addon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="orders-input">Orders</label>
                                                        <input type="text" class="form-control" id="orders-input"
                                                               placeholder="Orders" required="">
                                                        <div class="invalid-feedback">Please Enter a product orders.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="meta-title-input">Meta
                                                            title</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Enter meta title" id="meta-title-input">
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="meta-keywords-input">Meta
                                                            Keywords</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Enter meta keywords"
                                                               id="meta-keywords-input">
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div>
                                                <label class="form-label" for="meta-description-input">Meta
                                                    Description</label>
                                                <textarea class="form-control" id="meta-description-input"
                                                          placeholder="Enter meta description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                            <div class="text-end mb-3">
                                <button type="submit" class="btn btn-success w-sm">Submit</button>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Publish</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="choices-publish-status-input" class="form-label">Status</label>

                                        <select class="form-select" id="choices-publish-status-input" data-choices=""
                                                data-choices-search-false="">
                                            <option value="Published" selected="">Published</option>
                                            <option value="Scheduled">Scheduled</option>
                                            <option value="Draft">Draft</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="choices-publish-visibility-input"
                                               class="form-label">Visibility</label>
                                        <select class="form-select" id="choices-publish-visibility-input"
                                                data-choices="" data-choices-search-false="">
                                            <option value="Public" selected="">Public</option>
                                            <option value="Hidden">Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Size & Color</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Size Selection -->
                                    <div class="mb-3">
                                        <label class="form-label">Size</label>
                                        <select class="js-example-basic-multiple select2-hidden-accessible"
                                                name="sizes[]" multiple tabindex="-1" aria-hidden="true">
                                            <option value="S">Small</option>
                                            <option value="M">Medium</option>
                                            <option value="L">Large</option>
                                            <option value="XL">Extra Large</option>
                                            <option value="XXL">Double Extra Large</option>
                                        </select>
                                    </div>

                                    <!-- Color Selection -->
                                    <div class="mb-3">
                                        <label class="form-label">Color</label>
                                        <select class="js-example-basic-multiple select2-hidden-accessible"
                                                name="colors[]" multiple tabindex="-1" aria-hidden="true">
                                            <option value="red" style="color: red;">Red</option>
                                            <option value="blue" style="color: blue;">Blue</option>
                                            <option value="green" style="color: green;">Green</option>
                                            <option value="black" style="color: black;">Black</option>
                                            <option value="white" style="color: black;">White</option>
                                            <option value="yellow" style="color: #ffd700;">Yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->


                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Publish Schedule</h5>
                                </div>
                                <!-- end card body -->
                                <div class="card-body">
                                    <div>
                                        <label for="datepicker-publish-input" class="form-label">Publish Date &amp;
                                            Time</label>
                                        <input type="text" id="datepicker-publish-input" class="form-control"
                                               placeholder="Enter publish date" data-provider="flatpickr"
                                               data-date-format="d.m.y" data-enable-time="">
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0"><a href="#"
                                                                   class="float-end float-end badge btn btn-success  text-uppercase ">Add
                                            New</a>Add</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-2">Select product category</p>
                                    <select class="form-select" id="choices-category-input"
                                            name="choices-category-input" data-choices="" data-choices-search-false="">
                                        <option value="Appliances">Appliances</option>
                                        <option value="Automotive Accessories">Automotive Accessories</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Furniture">Furniture</option>
                                        <option value="Grocery">Grocery</option>
                                        <option value="Kids">Kids</option>
                                        <option value="Watches">Watches</option>
                                    </select>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Tags</h5>
                                </div>
                                <div class="card-body">
                                    <div class="hstack gap-3 align-items-start">
                                        <div class="flex-grow-1">
                                            <input class="form-control" data-choices=""
                                                   data-choices-multiple-remove="true" placeholder="Enter tags"
                                                   type="text" value="Cotton">
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Short Description</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-2">Add short description for product</p>
                                    <textarea class="form-control" placeholder="Must enter minimum of a 100 characters"
                                              rows="3"></textarea>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </form>
                @endsection

                @push('script')
                    <script>
                        $(document).ready(function () {
                            $('.js-example-basic-multiple').select2({
                                theme: "classic",
                                width: '100%'
                            });
                        });
                    </script>
    @endpush
