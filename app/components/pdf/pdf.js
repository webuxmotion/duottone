import { PDFDocument, rgb } from 'pdf-lib'
import song from './song.json';

const frame = document.getElementById('pdf');

if (frame) {
    const notes2 = song.tracks[0].notes;
    const notes1 = song.tracks[1].notes;
    
    function drawCircle(page, x, y) {
    
        page.drawCircle({
            x,
            y,
            size: 2,
            color: rgb(0, 0, 0),
            opacity: 1,
        });
    }
    
    const pages = [];
    
    function drawNotes(pdfDoc, notes) {
        let page;
        let pageIndex;
        let pageHeight;
    
        notes.forEach((item, idx) => {
            const posX = item.midi * 10 - 250;
            const posY = item.time * 10 + 50;
            let relatedPositionY;
    
            if (idx === 0) {
                page = pdfDoc.addPage();
                pageHeight = page.getHeight();
                pageIndex = 0;
                if (!pages[pageIndex]) {
                    pages.push(page);
                }
                relatedPositionY = posY - pageHeight * pageIndex;
            } else {
                relatedPositionY = posY - pageHeight * pageIndex;
                
                if (!(relatedPositionY < pageHeight)) {
                    pageIndex++;
                    if (!pages[pageIndex]) {
                        page = pdfDoc.addPage();
                        pages.push(page);
                    }
                }
            }
    
            drawCircle(pages[pageIndex], posX, relatedPositionY);
        });
    }
    
    createPdf();
    async function createPdf() {
        const pdfDoc = await PDFDocument.create();
        drawNotes(pdfDoc, notes2);
        drawNotes(pdfDoc, notes1);
        
        const pdfDataUri = await pdfDoc.saveAsBase64({ dataUri: true });
        frame.src = pdfDataUri;
    }
}