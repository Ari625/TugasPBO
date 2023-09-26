/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dbguru;

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
@Table(name = "guru", catalog = "guru", schema = "")
@NamedQueries({
    @NamedQuery(name = "Guru.findAll", query = "SELECT g FROM Guru g")
    , @NamedQuery(name = "Guru.findByNo", query = "SELECT g FROM Guru g WHERE g.no = :no")
    , @NamedQuery(name = "Guru.findByNama", query = "SELECT g FROM Guru g WHERE g.nama = :nama")
    , @NamedQuery(name = "Guru.findByPengajarMapel", query = "SELECT g FROM Guru g WHERE g.pengajarMapel = :pengajarMapel")})
public class Guru implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "no")
    private Integer no;
    @Column(name = "nama")
    private String nama;
    @Lob
    @Column(name = "alamat")
    private String alamat;
    @Column(name = "pengajar_mapel")
    private String pengajarMapel;

    public Guru() {
    }

    public Guru(Integer no) {
        this.no = no;
    }

    public Integer getNo() {
        return no;
    }

    public void setNo(Integer no) {
        Integer oldNo = this.no;
        this.no = no;
        changeSupport.firePropertyChange("no", oldNo, no);
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        String oldNama = this.nama;
        this.nama = nama;
        changeSupport.firePropertyChange("nama", oldNama, nama);
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        String oldAlamat = this.alamat;
        this.alamat = alamat;
        changeSupport.firePropertyChange("alamat", oldAlamat, alamat);
    }

    public String getPengajarMapel() {
        return pengajarMapel;
    }

    public void setPengajarMapel(String pengajarMapel) {
        String oldPengajarMapel = this.pengajarMapel;
        this.pengajarMapel = pengajarMapel;
        changeSupport.firePropertyChange("pengajarMapel", oldPengajarMapel, pengajarMapel);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (no != null ? no.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Guru)) {
            return false;
        }
        Guru other = (Guru) object;
        if ((this.no == null && other.no != null) || (this.no != null && !this.no.equals(other.no))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dbguru.Guru[ no=" + no + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
