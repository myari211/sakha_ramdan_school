                        <div class="row d-flex justify-content-center">
                            <h4>Form Pendaftaran</h4>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 mt-4">
                                <h5>
                                    <strong>Kompetensi Keahlian Yang Dipilih</strong>
                                </h5>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="tbsm" name="keahlian" value="otomotif">
                                        <label class="custom-control-label" for="tbsm">Teknik Dan Bisnis Sepeda Motor</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="tkj" name="keahlian" value="tkj">
                                        <label class="custom-control-label" for="tkj">Teknik Komputer Dan Jaringan</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="akuntansi" name="keahlian" value="akuntan">
                                        <label class="custom-control-label" for="akuntansi">Akuntansi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>
                                            <strong>Keterangan Tentang Siswa</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="md-form">
                                    <input type="text" name="full_name" class="form-control" id="full_name">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form">
                                    <input type="text" name="nickname" class="form-control" id="nickname">
                                    <label for="nama_panggilan">Nama Panggilan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Jenis Kelamin</span>
                                    </div>
                                </div>
                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" class="custom-control-input" id="male" name="jenis_kelamin">
                                    <label class="custom-control-label" for="male">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="female" name="jenis_kelamin" checked>
                                    <label class="custom-control-label" for="female">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <span>Tempat Tanggal Lahir</span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="md-form">
                                            <input type="text" name="tempat_lahir" class="form-control" id="place_of_birth">
                                            <label for="place_of_birth">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="md-form">
                                            <input type="date" name="tanggal_lahir" class="form-control" id="date_of_birth">
                                            <label for="date_of_birth">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" class="form-control" name="kewarganegaraan" id="nationality">
                                    <label for="nationality">Kewarganegaraan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <span>Keluarga</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="jumlah_keluaga_kandung" class="form-control" id="family">
                                    <label for="family">Jumlah Keluarga Kandung</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="jumlah_keluarga_tiri" class="form-control" id="step-family">
                                    <label for="step-family">Jumlah Keluarga Tiri</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 ml-0 pl-0">
                                <div class="col-lg-6">
                                    <div class="md-form">
                                        <input type="text" name="jumlah_keluarga_angkat" class="form-control" id="step-sibling">
                                        <label for="step-sibling">Jumlah Keluarga Angkat</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="col-lg-5 ml-0 pl-0">
                                    <label>
                                        Status <br />
                                        <small class="text-danger">*Kosongkan Jika Tidak Sesuai</small>
                                    </label>
                                    <select name="status" class="form-control mt-2">
                                        <option value="yatim">Yatim</option>
                                        <option value="piatu">Piatu</option>
                                        <option value="yatim piatu">Yatim Piatu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <span>Bahasa</span>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form">
                                    <input type="text" name="bahasa" class="form-control" id="language">
                                    <label for="language">Bahasa Sehari - hari</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <h4>Kegemaran Siswa</h4>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="kesenian" class="form-control" id="kesenian">
                                    <label for="kesenian">Kesenian</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="olah_raga" class="form-control" id="olahraga">
                                    <label for="olahraga">Olah Raga</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="organisasi" class="form-control" id="organisasi">
                                    <label for="organisasi">Organisasi</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="md-form">
                                    <input type="text" name="lain_lain" class="form-control" id="lain-lain">
                                    <label for="lain-lain">Lain - Lain</label>
                                </div>
                            </div>
                        </div>