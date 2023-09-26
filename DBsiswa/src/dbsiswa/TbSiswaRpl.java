/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dbsiswa;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Lob;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Transient;

/**
 *
 * @author Administrator
 */
@Entity
@Table(name = "tb_siswa_rpl", catalog = "dbsiswarpl", schema = "")
@NamedQueries({
    @NamedQuery(name = "TbSiswaRpl.findAll", query = "SELECT t FROM TbSiswaRpl t")
    , @NamedQuery(name = "TbSiswaRpl.findByNis", query = "SELECT t FROM TbSiswaRpl t WHERE t.nis = :nis")
    , @NamedQuery(name = "TbSiswaRpl.findByNama", query = "SELECT t FROM TbSiswaRpl t WHERE t.nama = :nama")
    , @NamedQuery(name = "TbSiswaRpl.findByKelas", query = "SELECT t FROM TbSiswaRpl t WHERE t.kelas = :kelas")
    , @NamedQuery(name = "TbSiswaRpl.findByNoHp", query = "SELECT t FROM TbSiswaRpl t WHERE t.noHp = :noHp")
    , @NamedQuery(name = "TbSiswaRpl.findByHobi", query = "SELECT t FROM TbSiswaRpl t WHERE t.hobi = :hobi")})
public class TbSiswaRpl implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "nis")
    private String nis;
    @Column(name = "nama")
    private String nama;
    @Column(name = "kelas")
    private String kelas;
    @Lob
    @Column(name = "alamat")
    private String alamat;
    @Column(name = "no_hp")
    private String noHp;
    @Column(name = "hobi")
    private String hobi;

    public TbSiswaRpl() {
    }

    public TbSiswaRpl(String nis) {
        this.nis = nis;
    }

    public String getNis() {
        return nis;
    }

    public void setNis(String nis) {
        String oldNis = this.nis;
        this.nis = nis;
        changeSupport.firePropertyChange("nis", oldNis, nis);
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        String oldNama = this.nama;
        this.nama = nama;
        changeSupport.firePropertyChange("nama", oldNama, nama);
    }

    public String getKelas() {
        return kelas;
    }

    public void setKelas(String kelas) {
        String oldKelas = this.kelas;
        this.kelas = kelas;
        changeSupport.firePropertyChange("kelas", oldKelas, kelas);
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        String oldAlamat = this.alamat;
        this.alamat = alamat;
        changeSupport.firePropertyChange("alamat", oldAlamat, alamat);
    }

    public String getNoHp() {
        return noHp;
    }

    public void setNoHp(String noHp) {
        String oldNoHp = this.noHp;
        this.noHp = noHp;
        changeSupport.firePropertyChange("noHp", oldNoHp, noHp);
    }

    public String getHobi() {
        return hobi;
    }

    public void setHobi(String hobi) {
        String oldHobi = this.hobi;
        this.hobi = hobi;
        changeSupport.firePropertyChange("hobi", oldHobi, hobi);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (nis != null ? nis.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof TbSiswaRpl)) {
            return false;
        }
        TbSiswaRpl other = (TbSiswaRpl) object;
        if ((this.nis == null && other.nis != null) || (this.nis != null && !this.nis.equals(other.nis))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dbsiswa.TbSiswaRpl[ nis=" + nis + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
